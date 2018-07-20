<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IdCard extends Model
{
    use SoftDeletes;
    protected $table = 'mall_idcard';
    protected $primaryKey = 'card_id';
    protected $dates = ['deleted_at'];
    protected $fillable = ['card_name', 'card_idcard', 'card_province', 'card_city', 'card_town', 'card_sex', 'card_birth'];
    public $timestamps = false;
    public static $filed = ['card_id', 'card_name', 'card_idcard', 'card_province', 'card_city', 'card_town', 'card_sex', 'card_birth'];

    /**
     * 第三方接口查询
     */
    public static function queryApi()
    {
        $res = ['card_name' => '我早', 'card_province' => '河南省', 'card_city' => '周口市', 'card_town' => '鹿邑县', 'card_sex' => '男', 'card_birth' => '1980年01月02日'];
        return (object)$res;
    }



    public function getCardSexAttribute($value)
    {
        return $value == 1 ? '男' : '女';
    }

    public function setCardSexAttribute($value)
    {
        $value = $value == '男' ? 1 : 2;
        $this->attributes['card_sex'] = $value;
    }

}
