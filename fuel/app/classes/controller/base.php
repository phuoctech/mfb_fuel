<?php
use Fuel\Core\Session;
use Fuel\Core\Response;

class Controller_Base extends Fuel\Core\Controller_Template
{
    public $template = 'layout.twig';
    
    public function before() {
        parent::before();
        
        if (!Session::get('user_token')) {
            Response::redirect('login');
        }
        
        //*** Initilize template
//        $this->template->header = Parser\View::forge('header.twig');
//        $this->template->sidebar = Parser\View::forge();
//        $this->template->content = Parser\View::forge();
//        $this->template->footer = Parser\View::forge();
        
    }
    
    public function log_error($ex) {
        Log::error($ex->getMessage().','.$ex->getTraceAsString());
    }
}

