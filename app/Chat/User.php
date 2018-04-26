<?php

namespace App\Chat;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'chat';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'password'];
    public static $file = ['id', 'name', 'password'];

}
