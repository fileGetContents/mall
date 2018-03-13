<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'mall_city';
    protected $primaryKey = 'city_id';
    public $timestamps = false;
    protected $fillable = ['city_id', 'city_num', 'city_name', 'province_id'];

    public static function file()
    {
        return ['city_id', 'city_num', 'city_name', 'province_id'];
    }

    /**
     * 关联省
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function province()
    {
        return $this->hasOne('App\Models\Province', 'province_num', 'province_id');
    }

    /**
     * 关联县级
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasMany('App\Models\Area', 'city_id', 'city_num');
    }

}
