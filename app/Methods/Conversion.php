<?php
namespace App\Methods;

class Conversion
{

    /**
     * 转化来Client数据转化为二维
     * @param $array
     * @return array
     */
    public static function clientSessionConversion($array = array())
    {
        $return = [];
        foreach ($array as $key => $value) {
            $value['client_id'] = $key;
            $return[] = $value;
        }
        return $return;
    }
}