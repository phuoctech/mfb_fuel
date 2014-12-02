<?php

class Model_UserPage extends Orm\Model
{
    protected static $_table_name = 'user_page';
    
    /**
     * 
     * @param string $user_id
     * @param string $fanpage_id
     * @return boolean
     */
    public static function remove_fanpage($user_id, $fanpage_id) {
        
        $page = Model_UserPage::find('first', array('where' => array('fanpage_id' => $fanpage_id, 'user_id' => $user_id)));

        if (!empty($page) && $page->delete()) {
            //delete successfully
            return true;
        }
        return false;
        
    }    
}

