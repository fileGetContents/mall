<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Browse extends Model
{
    protected $table = 'mall_user_browse';
    protected $primaryKey = 'browse_id';
    public $timestamps = false;
    protected $fillable = ['browse_id', 'user_id', 'browse_form', 'browse_time', 'browse_num'];


    /**
     * 转化时间格式
     * @param $value
     * @return bool|string
     */
    public function getBrowseTomeAttributes($value)
    {
        return date('Y-m-d H:i:s', $value);
    }

    /**
     * 表格字段
     * @return array
     */
    public static function filed()
    {
        return ['browse_id', 'user_id', 'browse_form', 'browse_time', 'browse_num'];
    }

}
