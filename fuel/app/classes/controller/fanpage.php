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
            View::forge('contents/modals/add_new_fanpage.twig', $data),
        );
    }
    
    /*
     * @Param
     * @Result
     */
    public function post_add_fanpage() {
        try {
            
            $page_id = $this->input->post('fanpage');
            
            if ($this->fanpage_model->add_fanpage($this->get_fanpage($page_id), $this->session->userdata('user_id'))) {
                //Set flash session
                Session::set_flash('success', 'Added');
            }

            $this->session->set_flashdata();
            Session::set_flash('error', 'Errors');
            
            Fuel\Core\Response::redirect('fanpage/index');
            
        } catch (Exception $ex) {
            Session::set_flash('error', $ex->getMessage());
            redirect('fanpage/index');
        }
    }
    
    
}