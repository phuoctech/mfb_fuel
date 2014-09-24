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
}
