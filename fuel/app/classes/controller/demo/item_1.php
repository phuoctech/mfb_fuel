<?php

Class Controller_Item extends Controller_Base {
    public $template = 'template';
    
    public function before() {
        parent::before(); // Without this line, templating won't work!
    }

    public function action_index() {
        $data = array();
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('test/index', $data);
    }
    public function action_learn_view_m1() {
        $view = Fuel\Core\View::forge('layout');
        
        $view->set_global('username', 'Joe14');
        $view->set_global('title', 'Home');
        $view->set_global('site_title', 'My website');
        
        $view->head = Fuel\Core\View::forge('head');
        $view->header = Fuel\Core\View::forge('header');
        $view->content = Fuel\Core\View::forge('content');
        $view->footer = Fuel\Core\View::forge('footer');
        
        //return view object to the request
        return $view;
    }
    
    public function action_learn_view_m2() {
        //assign variables
        $data = array();
        $data['title'] = 'Home';
        $data['site_title'] = 'My Website';
        $data['username'] = 'Joe14';
        
        //assign views as variables, forced rendering
        $views = array();
        $views['head'] = View::forge('head', $data)->render();
        $views['header'] = View::forge('header', $data)->render();
        $views['content'] = View::forge('content', $data)->render();
        $views['footer'] = View::forge('footer', $data)->render();
        
        // return the rendered HTML to the Request
        return View::forge('layout', $views)->render();        
    }
    
    public function action_learn_view_m3() {
        // create the layout view
        $view = View::forge('layout');

        //local view variables, lazy rendering
        $view->head = View::forge('head', array('title' => 'Home'));
        $view->header = View::forge('header', array('site_title' => 'My Website'));
        $view->content = View::forge('content', array('username' => 'Joe14', 'title' => 'Home'));
        $view->footer = View::forge('footer', array('site_title' => 'My Website'));

        // return the view object to the Request
        return $view;        
    }    
}