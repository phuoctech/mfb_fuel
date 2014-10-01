<?php

class Model_Users extends Orm\Model
{
    protected static $_table_name = 'users';
    protected static $_has_many = array(
	'user_pages' => array(
		'model_to' => 'Model_UserPage',
		'key_from' => 'fb_id',
		'key_to' => 'user_id',
		'cascade_save' => true,
		'cascade_delete' => true,
	    )
    );
    
    /*
     * @Param: object
     * @Return: bool
     */
    public static function register_user($user, $access_token) {
        
        $data = array(
            'fb_id'         => $user->getId(),
            'fullname'      => $user->getName(),
            'long_lived_access_token'  => $access_token,
            'avatar'        => '',
        );
        
        $user = Model_Users::forge($data);
        
        if ( !$user->save()) {
            return false;
        }
        return true;
    }
    
    /*
     * @Param: int
     * @Return: string
     */
    public static function get_user_name($user_id) {
        $user = Model_Users::find($user_id);
        return $user->fullname;
    }
}

