<?php
use Parser\View;
use Fuel\Core\Session;
use Fuel\Core\Input;

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
     * 
     */
    public function action_dashboard($page_id) {
        
        //Update Page token
        if (!Libs\Helper\Features::update_page_token($page_id, Session::get('user_token'))) {
            Session::set_flash('warning', 'There is an error when update page token');
        }
        // Get post list of this page:
        $data['post_list'] = Model_Posts::find('all', array('where'=>array('page_id'=>$page_id), 'order_by' => array('date_modified'=>'desc')));
        
        //Convert to json string to array
        foreach ($data['post_list'] as $item) {
            $item->content = json_decode($item->content);
            $item->author = $item->_user->fullname;
            $item->modifier = Model_Users::get_user_name($item->modifier);
            $item->date_modified = date('d-M-Y - H:m', $item->date_modified);
        }

        $data['page_id'] = $page_id;
        $this->template->header = View::forge('header.twig', $data);
        $this->template->content = View::forge('contents/page_dashboard.twig', $data);
        
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
     * @Param: int
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
    
    /*
     * Go to Add status page
     */
    public function get_add_status($page_id) {
        $data['page_id'] = $page_id;
        
        //*** Templates
        $this->template->title = 'Post new status';
        $this->template->header = View::forge('header.twig', $data);
        $this->template->content = View::forge('contents/add_status.twig', $data);
    }
    
    /*
     * Add new status
     */
    public function post_add_status() {
        
        $data = Libs\Helper\Input::get_new_data_status();
        
        if ( !empty(Input::post('push_facebook_on')) ) {  
            //*** Call api
            if (!\Libs\Helper\Features::post_status_to_fb($data['content'])) {
                //Unset push_facebook_on
                $data['push_facebook_on'] = 0;
                Session::set_flash('warning','Cannot post to facebook. Please try again later');
            }
        }
        
        //*** Add to DB
        if (!Model_Posts::add_new_post($data)) {
            Session::set_flash('error','Cannot add new post');
            \Fuel\Core\Response::redirect('fanpage/index');
        }
        
        Session::set_flash('success', 'Added new post');
        Response::redirect('fanpage/dashboard/'. Input::post('page_id'));
    }
    
    /*
     * @Param: int
     */
    public function get_add_image_with_url($page_id) {
        $data['page_id'] = $page_id;
        
        //*** Templates
        $this->template->title = 'Post new photo';
        $this->template->header = View::forge('header.twig', $data);
        $this->template->content = View::forge('contents/add_image.twig', $data);
    }
    
    public function post_add_image_with_url() {
        
        $data = Libs\Helper\Input::get_new_data_photo_by_url();
        
        if ( !empty(Input::post('push_facebook_on')) ) {  
            //*** Call api
            if ( !Libs\Helper\Features::post_photo_to_fb_by_url($data['content']) ) {
                //Unset push_facebook_on
                $data['push_facebook_on'] = 0;
                Session::set_flash('warning','Cannot post to facebook. Please try again later');
            }
            
        }
        
        //*** Add to DB
        if (!Model_Posts::add_new_post($data)) {
            Session::set_flash('error','Cannot add new post');
            \Fuel\Core\Response::redirect('fanpage/index');
        }
        
        Session::set_flash('success', 'Added new post');
        Response::redirect('fanpage/dashboard/'. Input::post('page_id'));        
    }
    
    /*
     * 
     */
    public function action_add_image_in_local() {
                
    }    
    
    public function action_test() {
        $this->template->content = View::forge('contents/add_status.twig');
    }
    
    /*******************************/
    /*
     * SAMPLE FUNCTION
     */
    private function sample_function() {
        try {
            // Stuff
            
        } catch (Exception $ex) {
            Session::set_flash('error', $ex->getMessage());
            $this->log_error($ex);
            Response::redirect('fanpage/index');
        }
    }
    
}