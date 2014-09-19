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
        //$data['page_list'] = $this->fanpage_model->get_page_list($this->session->userdata('user_token'));
        $data['page_list'] = Model_Pages::get_page_list( Session::get('user_id') );
        //$data['user_pages'] = $this->get_user_page_using_api();
        
        
        $this->template->content = View::forge('contents/user_dashboard.twig', $data);
        $this->template->modals = array(
            View::forge('contents/modals/add_new_fanpage.twig'),
        );
    }
    
}