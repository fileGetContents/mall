<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'mall_order';
    protected $primaryKey = 'order_id';
    public $timestamps = false;
    protected $fillable = ['order_id', 'order_num', 'user_id', 'good_id', 'order_time', 'order_status', 'order_address', 'order_telephone', 'order_name', 'order_price', 'order_serial'];

    public function getOrderAddressAttribute($value)
    {
        return unserialize($value);
    }

    /**
     * @param $array
     * @return bool
     */
    public function insert($array)
    {
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                $this->$key = $value;
            }
            return $this->save();
        }
        return false;
    }


    /**
     *创建唯一订单
     * @return string
     */
    public static function createSerial()
    {
        return rand(100000, 999999) . date('Ymd') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
    }
}
