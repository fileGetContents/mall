<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $table = 'mall_goods';
    protected $primaryKey = 'good_id';
    protected $dates = ['deleted_at'];
    protected $fillable = ['good_name', 'good_image', 'good_images', 'good_coding', 'good_num', 'good_preprice', 'good_oriprice', 'good_time', 'good_state', 'store_id', 'good_info', 'good_score', 'good_introduce'];
    public $timestamps = false;
    public static $filed = ['good_id', 'good_name', 'good_image', 'good_images', 'good_coding', 'good_num', 'good_preprice', 'good_oriprice', 'good_time', 'good_state', 'store_id', 'good_info', 'good_score', 'good_introduce'];

    public function getGoodImagesAttribute($value)
    {
        return unserialize($value);
    }

    public function setGoodImagesAttribute($value)
    {
        return serialize($value);
    }

}
