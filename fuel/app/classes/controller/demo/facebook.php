<?php
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;

class Controller_Facebook extends \Fuel\Core\Controller
{
    public function before() {
        parent::before();
        FacebookSession::setDefaultApplication('695082060564419', '093b0b371673a8b831dcc87d62fee7b0');
    }
    public function action_index() {
        $helper = new FacebookRedirectLoginHelper('http://localhost/sfuel/index.php/facebook');
        
        try {
            $session = $helper->getSessionFromRedirect();
        } catch(FacebookRequestException $ex) {
            // When Facebook returns an error
        } catch(\Exception $ex) {
            // When validation fails or other local issues
        }
        
        if ( isset($session )) {
            echo 'You logged success';
        } else { // Not logged
            echo 'Not logged <br/>';
            $login_url = $helper->getLoginUrl();
            echo "<a href='". $login_url. "'>Login with facebook</a>";
        }
    }
}

