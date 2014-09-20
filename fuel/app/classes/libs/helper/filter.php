<?php
namespace Libs\Helper;

class Filter
{
    /*
     * The helper of facebook sdk
     * @Param: array 
     * @Return: array
     */
    public static function filter_fb_page($user_id, $access_token) {
        $result = array();
        $facebook = new \Libs\Facebook();
        $pages  = $facebook->get_user_pages($access_token);
        
        foreach ($pages as $item) {
            $item = $item->asArray(); //Convert oject to array
            if (in_array('CREATE_CONTENT', $item['perms'])) {
                //*** Check if fanpage has added in DB
                if ( empty(\Model_Pages::find( 'first', array( 'where' => array( 'fanpage_id' => $item['id'] ) ) ))) {
                    $result[] = array(
                        'name' => $item['name'],
                        'id' => $item['id'],
                        'access_token' => $item['access_token'],
                    );
                }
            }
        }
        
        return $result;
    }
}
