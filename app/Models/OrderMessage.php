<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderMessage extends Model
{
    protected $table = 'mall_order_message';
    protected $primaryKey = 'om_id';
    public $timestamps = false;
    protected $fillable = ['om_id', 'order_serial', 'order_id', 'user_id'];


    public static function file()
    {
        return ['om_id', 'order_serial', 'order_id', 'user_id'];
    }

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
}
