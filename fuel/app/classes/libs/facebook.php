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
    
    public function __construct() {
        Config::load('facebook');
        FacebookSession::setDefaultApplication(Config::get('appId'), Config::get('appSecret'));
    }
    
    public static function login() {
        
    }
}

