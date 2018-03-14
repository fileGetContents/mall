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

    public static function field()
    {
        return ['user_id', 'user_nickname', 'user_telephone', 'user_time', 'user_password'];
    }

    /**
     * @param $array
     * @return bool
     */
    public function insert($array)
    {
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                $this->$key = $value;
            }
            return $this->save();
        }
        return false;
    }
}
