<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'mall_message';
    protected $primaryKey = 'message_id';
    public $timestamps = false;
    protected $fillable = ['message_id', 'message_title', 'message_text', 'message_form', 'message_time', 'user_id', 'admin_id'];

    /**
     * @param $value
     * @return bool|string
     */
    public function getMessageTimeAttribute($value)
    {
        return date('Y-m-d H:i:s', $value);
    }

}