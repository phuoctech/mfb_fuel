<?php

class Model_Foods extends Orm\Model
{
    protected static $_table_name = 'foods';
    protected static $_properties = array('food_id', 'food_name', 'food_description', 'food_date', 'food_price', 'food_position');
    protected static $_primary_key = array('food_id');
    //protected static $_has_many = array('order_detail');
    
}
