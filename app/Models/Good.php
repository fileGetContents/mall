<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $table = 'mall_goods';
    protected $primaryKey = 'good_id';
    public $timestamps = false;
    protected $fillable = ['good_id', 'good_name', 'good_image', 'good_images', 'good_coding', 'good_num', 'good_preprice', 'good_oriprice', 'good_time'];
    protected $casts = ['good_images'=>'array'];

    public function setGoodImagesAttribute($value)
    {
        return serialize($value);
    }

    public function getGoodImagesAttribute($value)
    {
        return unserialize($value);
    }

    public function getGoodTimeAttribute($value)
    {
        return date('Y-m-d H:i:s', $value);
    }

    /**
     * 获取表格字段
     * @return array
     */
    public function filed()
    {
        return ['good_id', 'good_name', 'good_image', 'good_images', 'good_coding', 'good_num', 'good_preprice', 'good_oriprice', 'good_time'];
    }

}
