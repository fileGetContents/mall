<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'mall_address';
    protected $primaryKey = 'address_id';
    public $timestamps = false;
    protected $fillable = ['address_id', 'user_id', 'area', 'city', 'province', 'address_live', 'address_time', 'address_tag', 'address_name', 'address_telephone'];

    public static function file()
    {
        return ['address_id', 'user_id', 'area', 'city', 'province', 'address_live', 'address_time', 'address_tag', 'address_name', 'address_telephone'];
    }

}
