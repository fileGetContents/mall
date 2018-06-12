<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    protected $table = 'mall_users';
    protected $primaryKey = 'user_id';
    protected $dates = ['deleted_at'];
    protected $fillable = ['user_nickname', 'user_password', 'user_mobile', 'user_time'];
    public $timestamps = false;
    public static $filed = ['user_nickname', 'user_password', 'user_mobile', 'user_time', 'u_id'];

}
