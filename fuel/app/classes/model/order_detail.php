<?php

class Model_Order_Detail extends Orm\Model
{
    protected static $_table_name = 'order_detail';
    protected static $_properties = array('food_id', 'order_id');
    protected static $_primary_key = array('food_id', 'order_id', 'order_detail_price', 'order_detail_quantity');
    protected static $_belongs_to = array(
        'foods' => array(
            'key_from' => 'food_id',
            'model_to' => 'Model_Foods',
            'key_to' => 'food_id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )        
    );
}

