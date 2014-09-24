<?php

class Model_Pages extends Orm\Model
{
    protected static $_table_name = 'pages';
    
    /*
     * @Param: user_id
     * @Return: Array
     */
    public static function get_page_list($user_id) {
        $query = Fuel\Core\DB::select('*')
                ->from('user_page')
                ->join('pages')
                ->on('pages.fanpage_id', '=', 'user_page.fanpage_id')
                ->where('user_page.user_id', '=', $user_id)->execute();
        return $query->as_array();
    }
    
    /*
     * @Param: fanpage_id
     * @Return: bool
     */
    
    public static function check_page_exist($fanpage_id) {
        
        if ( empty(Model_Pages::find('first', array('where' => array('fanpage_id' => $fanpage_id)))) ) {
            return false;
        }
        return true;
    }
    
    /*
     * @Param: page
     * - fanpage_id: string
     * - name: string
     * - long_lived_access_token
     * @Return: bool
     */
    public static function add_fanpage($page) {
        
        $item = Model_Pages::forge(array(
            'fanpage_id' => $page['fanpage_id'],
            'name' => $page['name'],
            'long_lived_access_token' => $page['long_lived_access_token'],
            'cover' => $page['cover'],
        ));
        
        if (!$item->save()) {
            return false;
        }
        return true;
    }
    
}

