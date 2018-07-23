<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ClassGood extends Model
{
    protected $table = 'mall_class_good';
    protected $primaryKey = 'class_id';
    protected $dates = ['deleted_at'];
    protected $fillable = ['class_name', 'class_prv', 'class_depth', 'class_time', 'deleted_at'];
    public $timestamps = false;
    public static $filed = ['class_id', 'class_name', 'class_prv', 'class_depth', 'class_time', 'deleted_at'];

    /**
     *  获取栏目
     */
    public static function getAllMenu()
    {
        if (Storage::exists('menu.log')) {
            $res = file_get_contents(storage_path('app\menu.log'));
            return $res;
        } else {
            $menu['one'] = static::select(static::$filed)->where(['class_depth' => 0])->get();
            $menu['two'] = static::select(static::$filed)->where(['class_depth' => 1])->get();
            $menu['three'] = static::select(static::$filed)->where(['class_depth' => 2])->get();

            foreach ($menu['two'] as $key => $value) {
                $string = '';
                foreach ($menu['three'] as $k => $v) {
                    if ($value->class_id == $v->class_prv) {
                        $string .= '<a href="">' . $v->class_name . '</a>';
                    }
                }
                $menu['two'][$key]->child = $string;
            }

            foreach ($menu['one'] as $key => $value) {
                $string = '';
                foreach ($menu['two'] as $k => $v) {
                    if ($value->class_id == $v->class_prv) {
                        $string .= '<a href="">' . $v->class_name . '</a>';
                    }
                }
                $menu['one'][$key]->child = $string;
            }


            // Storage::put('menu.log', 111111111);
        }

    }

}
