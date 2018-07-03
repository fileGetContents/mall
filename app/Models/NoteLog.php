<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NoteLog extends Model
{
    use SoftDeletes;
    protected $table = 'mall_note_log';
    protected $primaryKey = 'note_id';
    protected $dates = ['deleted_at'];
    protected $fillable = ['note_mobile', 'note_id', 'deleted_at', 'note_time', 'note_explain'];
    public $timestamps = false;
    public static $filed = ['note_mobile', 'note_id', 'deleted_at', 'note_time', 'note_explain'];

    public function getNoteTimeAttribute($value)
    {
        return date('Y-m-d H:i:s', $value);
    }

}
