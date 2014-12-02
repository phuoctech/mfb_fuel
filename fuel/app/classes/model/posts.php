<?php

class Model_Posts extends Orm\Model
{
    protected static $_table_name = 'posts';
    protected static $_belongs_to = array(
        '_user' => array(
            'key_from' => 'author',
            'model_to' => 'Model_Users',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        ),
        '_page' => array(
            'key_from' => 'page_id',
            'model_to' => 'Model_Pages',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        ),
    );
    
    /**
     * 
     * @param obj $data
     * @return boolean
     */
    public static function add_new_post($data) {
        
        $user = Model_Users::find('first', array('where' => array('fb_id' => $data['author'] ) ));
        $page = Model_Pages::find($data['page_id']);
        
        if (isset($user) && isset($page)) {
            $post = Model_Posts::forge($data);
            $post->author = $user->id;
            $post->modifier = $user->id;
            $post->page_id = $page->id;

            if ($post->save()) {
                return true;
            }
        }
        return false;
    }
    /**
     * 
     * @param string $post_id
     * @param obj $user_id
     * @return null | obj
     */
    public static function get_post($post_id, $user) {
        
        if (!isset($user)) return null;
        
        $post = Model_Posts::find('first', 
            array('where'=> 
                array('id' => $post_id,'author' => $user->id),
            )
        );
        
        if (isset($post)) {
            $post_content = json_decode($post->content);
            
            // Change time format:
            if (isset($post_content->scheduled_publish_time)) {
                $post_content->scheduled_publish_time = date('Y/m/d H:m', $post_content->scheduled_publish_time);
            }
            
            $post->content = $post_content;
        }
        return $post;
    }
    
    public static function edit_post($post_id, $data) {
        $post = Model_Posts::find($post_id);

        if (isset($post)) {   
            $post->set($data);
      
            $user = Model_Users::find('first', array('where' => array('fb_id' => $data['author'] ) ));
            $page = Model_Pages::find($data['page_id']);

            if (isset($user) && isset($page)) {
                $post->author = $user->id;
                $post->modifier = $user->id;
                $post->page_id = $page->id;

                $post->save();
                return true;
            }
        }
        return false;
    }
    
    public static function delete_post($post_id) {
        $post = Model_Posts::find($post_id);
        $post->delete();
        return true;
    }
}

