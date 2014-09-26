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
    
    /*
     * @Param: array
     * @Return: bool
     */
    public static function add_new_post($data) {
        
        $user = Model_Users::find('first', array('where' => array('fb_id' => $data['author'] ) ));
        $page = Model_Pages::find($data['page_id']);
        
        $post = Model_Posts::forge($data);
        $post->author = $user->id;
        $post->modifier = $user->id;
        $post->page_id = $page->id;
        
        if (!$post->save()) {
            return false;
        }        
        return true;
    }
}

