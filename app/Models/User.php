<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'mall_users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    protected $fillable = ['user_id', 'user_nickname', 'user_telephone', 'user_time', 'user_password'];

    /**
     * 解密密码
     * @param $value
     * @return string
     */
    public function getUserPasswordAttribute($value)
    {
        return decrypt($value);
    }
}
