<?php
use Fuel\Core\Controller;
use Fuel\Core\Session;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

class Controller_Login extends \Fuel\Core\Controller_Template
{
    public $template = 'login.twig';
    public $facebook = null;
    public function before() {
        parent::before();
        $this->facebook = new Libs\Facebook;
    }
    /**
     * 
     */
    public function action_index() {
        
        if (Session::get('user_token')) {
            Response::redirect('fanpage/index');
        }
        try {
            $helper = new FacebookRedirectLoginHelper(Config::get('login_url'));
            $session = $helper->getSessionFromRedirect();
        } catch(FacebookRequestException $ex) {
            // When Facebook returns an error
        } catch(\Exception $ex) {
            // When validation fails or other local issues
        }
        
        if ( isset($session) ) { //login succes
            $long_lived_session = $session->getLongLivedSession();
            $access_token = $long_lived_session->getToken();
            
            //*** Call api to get user info
            $user_info = $this->facebook->get_user_information($access_token);
            
            //*** Check if user has existed
            $user = Model_Users::find( 'first', array('where' => array( 'fb_id' => $user_info->getId() ) ) );

            if ( empty($user) ) {
                // Register user
                if ( Model_Users::register_user($user_info, $access_token) ) {
                    //Success
                }
            }
            
            //*** Set session for user
            Fuel\Core\Session::set('user_token', $long_lived_session->getToken());
            Fuel\Core\Session::set('user_id', $user_info->getId());
            
            //*** Redirect to home
            \Fuel\Core\Response::redirect('fanpage/index');
        } else {
            // login fail
            $this->template->login_url = $helper->getLoginUrl(\Fuel\Core\Config::get('scope'));
        }
    }
    
    public function action_logout() {
        //*** Remove Session
        Session::delete('user_token');
        Session::delete('user_id');
        
        //*** Redirect to home
        \Fuel\Core\Response::redirect('login');
    }
    
    public function action_index1() {
        
        if ( !empty($this->facebook->login()) ) { //Log susscess
            $access_token = $this->facebook->login();
            $this->template->test = 'Token is: '. $access_token;
            //*** Get user info
            //$user = $this->facebook->get_user_information($access_token);
            
            //*** Set session for user
            
            //\Fuel\Core\Response::redirect('fanpage/index');
        } else {
            $this->template->login_url = $this->facebook->get_login_url();
        }
    }
    
    
    
    public function action_test() {
        echo __METHOD__.'->'.__METHOD__;
    }
    
}
