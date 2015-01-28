<?php

namespace Libs\Helper;

class Input
{
    /**
     * 
     * @param type $post_type
     * @return null | array
     */
    public static function get_edit_data($post_type) {
        switch ($post_type) {
            case 1:
                $result = Input::get_edit_status();
                break;
            case 2: 
                $result = Input::get_edit_data_photo_by_url();
                break;
            default :
                $result = null;
                break;
        }
        return $result;
    }
    /*
     * Prepare data got from Form
     */
    public static function get_new_data_status() {
        
        $content = array(
            'message' => \Fuel\Core\Input::post('message'),
            'link' => \Fuel\Core\Input::post('link'),
        );
        
        if ( empty(\Fuel\Core\Input::post('publish_instantly')) ) {  
            $content['published'] = false;
            $content['scheduled_publish_time'] = \Libs\Datetime::get_timestamp(\Fuel\Core\Input::post('scheduled_publish_time'));   
        }
        
        $result = array(
            'author' => \Fuel\Core\Session::get('user_id'),
            'page_id'=> \Fuel\Core\Input::post('page_id'),
            'modifier' => \Fuel\Core\Session::get('user_id'),
            'type' => \Fuel\Core\Input::post('type'),
            'push_facebook_on' => \Fuel\Core\Input::post('push_facebook_on'),
            'date_created' => \Libs\Datetime::get_current_timestamp(),
            'date_modified' => \Libs\Datetime::get_current_timestamp(),
            'content' => json_encode($content),
        );
        
        return $result;
    }
    
    /**
     * 
     * @return array
     */
    public static function get_edit_status() {
        $content = array(
            'message' => \Fuel\Core\Input::post('message'),
            'link' => \Fuel\Core\Input::post('link'),
        );
        
        if ( empty(\Fuel\Core\Input::post('publish_instantly')) ) {  
            $content['published'] = false;
            $content['scheduled_publish_time'] = \Libs\Datetime::get_timestamp(\Fuel\Core\Input::post('scheduled_publish_time'));   
        }
        
        $result = array(
            'author' => \Fuel\Core\Session::get('user_id'),
            'page_id'=> \Fuel\Core\Input::post('page_id'),
            'modifier' => \Fuel\Core\Session::get('user_id'),
            'type' => \Fuel\Core\Input::post('type'),
            'push_facebook_on' => \Fuel\Core\Input::post('push_facebook_on'),
            'date_modified' => \Libs\Datetime::get_current_timestamp(),
            'content' => json_encode($content),
        );
        
        return $result;        
    }


    /*
     * Prepare data from Upload Photo Form
     */
    public static function get_new_data_photo_by_url() {
        
        $content = array(
            'message' => \Fuel\Core\Input::post('message'),
            'url' => \Fuel\Core\Input::post('link'),
        );
        
        if ( empty(\Fuel\Core\Input::post('publish_instantly')) ) {  
            $content['published'] = false;
            $content['scheduled_publish_time'] = \Libs\Datetime::get_timestamp(\Fuel\Core\Input::post('scheduled_publish_time'));   
        }
        
        $result = array(
            'author' => \Fuel\Core\Session::get('user_id'),
            'page_id'=> \Fuel\Core\Input::post('page_id'),
            'modifier' => \Fuel\Core\Session::get('user_id'),
            'type' => \Fuel\Core\Input::post('type'),
            'push_facebook_on' => \Fuel\Core\Input::post('push_facebook_on'),
            'date_modified' => \Libs\Datetime::get_current_timestamp(),
            'content' => json_encode($content),
        );
        
        return $result;
    }
    
    public static function get_edit_data_photo_by_url() {
        $content = array(
            'message' => \Fuel\Core\Input::post('message'),
            'url' => \Fuel\Core\Input::post('link'),
        );
        
        if ( empty(\Fuel\Core\Input::post('publish_instantly')) ) {  
            $content['published'] = false;
            $content['scheduled_publish_time'] = \Libs\Datetime::get_timestamp(\Fuel\Core\Input::post('scheduled_publish_time'));   
        }
        
        $result = array(
            'author' => \Fuel\Core\Session::get('user_id'),
            'page_id'=> \Fuel\Core\Input::post('page_id'),
            'modifier' => \Fuel\Core\Session::get('user_id'),
            'type' => \Fuel\Core\Input::post('type'),
            'push_facebook_on' => \Fuel\Core\Input::post('push_facebook_on'),
            'date_created' => \Libs\Datetime::get_current_timestamp(),
            'date_modified' => \Libs\Datetime::get_current_timestamp(),
            'content' => json_encode($content),
        );
        
        return $result;
    }
}

