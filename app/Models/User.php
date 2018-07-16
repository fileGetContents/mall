<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class User extends Model
{
    use SoftDeletes;
    protected $table = 'mall_users';
    protected $primaryKey = 'user_id';
    protected $dates = ['deleted_at'];
    protected $fillable = ['user_nickname', 'user_password', 'user_mobile', 'user_time'];
    public $timestamps = false;
    public static $filed = ['user_nickname', 'user_password', 'user_mobile', 'user_time', 'user_id'];

    /**
     * 登陆日志
     * @param $mobile
     * @return 登陆日志
     */
    public static function UserLogin($mobile, $ip = '')
    {
        $ip = $ip === '' ? $_SERVER['REMOTE_ADDR'] : $ip;
        $file = 'operation/' . date('Y-m-d', $_SERVER['REQUEST_TIME']);
        if (!Storage::exists($file)) {
            Storage::makeDirectory($file);
        }
        Storage::append($file . '/Login.log', $mobile . '在IP地址为' . $ip . '登陆');
    }
}
