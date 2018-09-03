<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'mall_shop';
    protected $primaryKey = 'shop_id';
    public static $getPrimarKey = 'shop_id';
    protected $dates = ['deleted_at'];
    protected $fillable = ['shop_name', 'user_id', 'deleted_at'];
    public $timestamps = false;
    public static $filed = ['shop_id', 'shop_name', 'user_id', 'deleted_at'];


}
