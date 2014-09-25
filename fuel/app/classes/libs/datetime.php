<?php
namespace Libs;

class Datetime
{
    /*
     * @Param: string
     * @Return: string
     */
    public static function get_timestamp($date_time) {
        $date = new \DateTime($date_time, new \DateTimeZone('Asia/Bangkok'));
        return $date->getTimestamp();
    }
    
    /*
     * @Return: string
     */
    public static function get_current_timestamp() {
        $date = new \DateTime('now', new \DateTimeZone('Asia/Bangkok'));
        return $date->getTimestamp();
    }
}

