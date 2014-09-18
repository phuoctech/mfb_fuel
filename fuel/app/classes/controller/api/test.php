<?php

class Controller_Api_Test extends \Fuel\Core\Controller_Rest
{
    public function get_list() {
        return $this->response(array(
            'foo' => 'value1',
            'baz' => array(
                1, 20, 59
            ),
            'empty' => 'null'
        ));
    }
}