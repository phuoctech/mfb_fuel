<?php
namespace Libs\Helper;

class Features
{
    /*
     * @Param: fanpage_id
     * @Paran: access_token
     * @Return: bool
     */
    public static function add_fanpage($fanpage_id, $user_id, $access_token) {
        
        //*** Call api to get fanpage info
        $facebook = new \Libs\Facebook();
        
        $page = $facebook->get_page_information($fanpage_id, $access_token);
        
        //*** Add to DB
        
        \Fuel\Core\DB::start_transaction();
        
        if (!\Model_Pages::check_page_exist($fanpage_id)) {
            if (!\Model_Pages::add_fanpage($page)) return false;
        }
        
        $data = array(
            'user_id' => $user_id,
            'fanpage_id' => $fanpage_id
        );
        
        $user_page = \Model_UserPage::forge($data);
        
        if (!$user_page->save()) {
            return false;
        }
        \Fuel\Core\DB::commit_transaction();
        
        return true;
        
    }
    
    /*
     * @Param: array
     * @Return: bool
     */
    
    public static function post_status_to_fb($data) {
        
        $flag = false;
        switch($data['push_facebook_on']) {
            case 0:
                //Call to api
                //$flag = 
                break;
            case 1:
                //Call to api
                //$flag = 
                break;
        }
        return $flag;
    }
}
