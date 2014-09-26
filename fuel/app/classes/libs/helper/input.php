<?php

namespace Libs\Helper;

class Input
{
    /*
     * Prepare data got from Form.
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

}

