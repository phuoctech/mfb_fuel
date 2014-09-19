<?php

class Model_Pages extends Orm\Model
{
    protected static $_table_name = 'user_page';
    
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
}

