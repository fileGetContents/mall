<?php
namespace App\Methods;

class ArrayHelps
{

    /**
     * 检查一个值是否存在一个二维数组中
     * @param $value
     * @param $array
     * @return bool
     */
    public static function deepInArray($value, $array)
    {
        $bool = false;
        foreach ($array as $item) {
            if (in_array($value, $item)) {
                $bool = true;
                break;
            }
        }
        return $bool;
    }

}