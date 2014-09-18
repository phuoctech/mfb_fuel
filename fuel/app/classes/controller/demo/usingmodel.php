<?php

class Controller_UsingModel extends Controller
{
    public function action_index() {
        $foods = Model_Foods::forge();
        $row = $foods->find(51);
        
        $order_detail = $row->order_detail;
        echo 'OK';
    }
}

