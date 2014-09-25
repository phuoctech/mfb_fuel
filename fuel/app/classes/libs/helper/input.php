<?php

namespace Libs\Helper;

class Input
{
    public static function get_new_data_status_with() {
        
        $content = array(
            'message' => \Fuel\Core\Input::post('message'),
            'link' => \Fuel\Core\Input::post('link'),
        );
        
        $result = array(
            'author' => \Fuel\Core\Session::get('user_id'),
            'page_id'=> \Fuel\Core\Input::post('page_id'),
            'modifier' => \Fuel\Core\Input::post('user_id'),
            'type' => \Fuel\Core\Input::post('type'),
            'push_facebook_on' => \Fuel\Core\Input::post('push_facebook_on'),
            'date_created' => \Libs\Datetime::get_current_timestamp(),
            'date_modified' => \Libs\Datetime::get_current_timestamp(),
            'content' => json_encode($content),
        );
        
        return $result;
    }
}

