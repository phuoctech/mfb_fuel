<?php
use Parser\View;

class Controller_Fanpage extends Controller_Base
{
    public function action_index() {
        
        $this->template->content = View::forge('contents/user_dashboard.twig');
        $this->template->modals = array(
            View::forge('contents/modals/add_new_fanpage.twig'),
        );
    }
}