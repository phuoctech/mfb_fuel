<?php
/*
 * Class Facebook
 * @Author: EchPay
 * @Version: 1.0
 * 
 */
namespace Libs;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Fuel\Core\Config;
class Facebook
{
    public static $session;
    public static $helper;
    
    public static function forge() {
        
        Config::load('facebook');
        FacebookSession::setDefaultApplication(Config::get('appId'), Config::get('appSecret'));
        
        $helper = new FacebookRedirectLoginHelperTest(Config::get('login_url'));
        
        try {
            $session = $helper->getSessionFromRedirect();
            return $session;
        } catch(FacebookRequestException $ex) {
            // When Facebook returns an error
        } catch(\Exception $ex) {
            // When validation fails or other local issues
        }
    }
    
    public function login() {
        
    }
}

