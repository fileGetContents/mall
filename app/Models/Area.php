<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'mall_area';
    protected $primaryKey = 'area_id';
    public $timestamps = false;
    protected $fillable = ['area_id', 'area_num', 'area_name', 'city_id'];

    public static function file()
    {
        return ['area_id', 'area_num', 'area_name', 'city_id'];
    }

    /**
     * 关联城市
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function city()
    {
        return $this->hasOne('App\Models\City', 'city_num', 'city_id');
    }

}
