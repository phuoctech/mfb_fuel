<?php
use Parser\View;
use Fuel\Core\Session;

class Controller_Fanpage extends Controller_Base
{
    /*
     * Show user_dashboard
     */
    public function action_index() {
        
        //*** Get Page list of user
        $data['page_list'] = Model_Pages::get_page_list( Session::get('user_id') );
        $data['user_pages'] = Libs\Helper\Filter::filter_fb_page( Session::get('user_id'), Session::get('user_token') );
        
        $this->template->content = View::forge('contents/user_dashboard.twig', $data);
        $this->template->modals = array(
            View::forge('contents/modals/add_new_fanpage.twig'),
        );
    }
    
}