<?php
use Fuel\Core\Controller;
class Controller_Login extends \Fuel\Core\Controller_Template
{
    public $template = 'login.twig';
    
    public function before() {
        parent::before();
        
        if (Session::get('user_token')) {
            Response::redirect('fanpage/index');
        }        
    }
    
    public function action_index() {
        $session = Libs\Facebook::$session;
        // Exchange to long lived token
        
        if (isset($session) && $session->validate()) { // Login successful
            
        } else { // Not logged
            // *** Please define the permission in config/facebook.php
//            $data['loginUrl'] = $helper->getLoginUrl($this->config->item('scope'));
            //$data['loginUrl'] = $helper->getLoginUrl();
            //$data['loginUrl'] = 'http://localhost/mfb/';
            $this->template->loginUrl = 'http://localhost/mfb/';
        }
        
    }
    
    public function action_test() {
        Config::load('facebook');
        echo Config::get('appId');
    }
    
}
