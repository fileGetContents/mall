<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'mall_province';
    protected $primaryKey = 'province_id';
    public $timestamps = false;
    protected $fillable = ['province_id', 'province_num', 'province_name'];

    public static function file()
    {
        return ['province_id', 'province_num', 'province_name'];
    }

    /**
     * 关联城市
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function city()
    {
        return $this->hasMany('App\Models\City', 'province_id', 'province_num');
    }
}
