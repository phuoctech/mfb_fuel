<?php
/*
 * Class Facebook used in FuelPHP 1.7
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
    public $session = null;
    public $helper = null;
    
    public function __construct() {
        
        Config::load('facebook');
        FacebookSession::setDefaultApplication(Config::get('appId'), Config::get('appSecret'));
        
        $this->helper = new FacebookRedirectLoginHelper(Config::get('login_url'));
    }
    
    /*
     * @Return: string
     */
    public function get_login_url() {
        return $this->helper->getLoginUrl();
    }
    
    /*
     * @Param: 
     * - access_token: string
     * @Return: string | bool
     */    
    public function exchange_long_lived_token($access_token) {
        $session = new FacebookSession($access_token);
        
        // Check validate token
        if ($session->validate()) {
            $long_lived_session = $session->getLongLivedSession();
            return $long_lived_session->getToken();
        }
        
        return false;
    }
    
    /*
     * @Param: 
     * - access_token: string
     * @Return: Object
     */
    public function get_user_information($access_token) {
        
        $session = $this->get_session_from_token($access_token);
        if (!$session->validate()) return false;
        
        //*** Call api
        $request = new FacebookRequest($session, 'GET', '/me');
        $response = $request->execute();
        return $response->getGraphObject(GraphUser::className());    
        
    }
    
    /*
     * @Param
     * @Return
     */
    
    public function get_user_pages($access_token) {
        $session = $this->get_session_from_token($access_token);
        if (!$session->validate()) return false;
        
        $request = (new FacebookRequest($session, 'GET', '/me/accounts'))->execute();
        $response = $request->getGraphObject();

        //*** Get array of Page objects
        return $response->getPropertyAsArray('data');
    }


    /**************************************************************************/
    /*
     * @Param: 
     * - access_token: string
     * @Return: string | bool
     */
    public function get_session_from_token($access_token) {
        
        return new FacebookSession($access_token);
        
    }
}

