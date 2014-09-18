<?php

class Controller_Demo_Twig extends \Fuel\Core\Controller_Template
{
    public $template = 'layout.twig';
    public function action_index() {
        $data['title'] = 'Hello, world';
        $data['welcome'] = 'Welcome to Twig';
        $view = View::forge('layout.twig', $data);
        return $view;
        //$this->template->title = 'Example Page';
        //$this->template->content = $view;
    }
    
    public function action_layout() {
        Parser\View_Twig::parser();
        return $view;
    }
}

