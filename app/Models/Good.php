<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $table = 'mall_goods';
    protected $primaryKey = 'good_id';
    public static $getPrimarKey = 'good_id';
    protected $dates = ['deleted_at'];
    protected $fillable = ['good_name', 'good_image', 'good_images', 'good_coding', 'good_num', 'good_preprice', 'good_oriprice', 'good_time', 'good_state', 'store_id', 'good_info', 'good_score', 'good_introduce', 'class_id', 'good_sales', 'good_comment'];
    public $timestamps = false;
    public static $filed = ['good_id', 'good_name', 'good_image', 'good_images', 'good_coding', 'good_num', 'good_preprice', 'good_oriprice', 'good_time', 'good_state', 'store_id', 'good_info', 'good_score', 'good_introduce', 'class_id', 'good_sales', 'good_comment'];

    public function getGoodImagesAttribute($value)
    {
        return unserialize($value);
    }

    public function setGoodImagesAttribute($value)
    {
        return serialize($value) == false ? ['/icon/image.png'] : serialize($value);
    }

}
