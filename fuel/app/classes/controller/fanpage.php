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
     * Add new fanpage 
     */
    public function post_add_fanpage() {
        try {
            
            $page_id = \Fuel\Core\Input::post('fanpage');
            
            if ( Libs\Helper\Features::add_fanpage($page_id, Session::get('user_id'), Session::get('user_token')) ) {
                //Set flash session
                Session::set_flash('success', 'Added successfully');
            } else {
                Session::set_flash('error', 'Cannot add new fanpage');
            }
            
            Fuel\Core\Response::redirect('fanpage/index');
            
        } catch (Exception $ex) {
            Fuel\Core\DB::rollback_transaction();
            Session::set_flash('error', $ex->getMessage());
            $this->log_error($ex);
            Response::redirect('fanpage/index');
        }
    }
    
    /*
     * 
     */
    public function action_remove_fanpage($fanpage_id) {
        try {
            
            if (Model_UserPage::remove_fanpage( Session::get('user_id'), $fanpage_id) ) {
                //Set flash session
                Session::set_flash('success', 'Remove the page successfully');
            } else {
                Session::set_flash('error', 'Cannot remove the fanpage');
            }
            
            Fuel\Core\Response::redirect('fanpage/index');
            
        } catch (Exception $ex) {
            Session::set_flash('error', $ex->getMessage());
            $this->log_error($ex);
            Response::redirect('fanpage/index');
        }        
    }
    
    public function action_test() {
        
        Session::set_flash('success','Success');
        Session::set_flash('error','Danger');
        Session::set_flash('warning','Danger');
        Session::set_flash('info','Danger');
        
    }
    
    
}