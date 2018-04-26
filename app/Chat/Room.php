<?php

namespace App\Chat;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $connection = 'chat';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'introduce', 'number'];
    public static $file = ['id', 'name', 'introduce', 'number'];
}
