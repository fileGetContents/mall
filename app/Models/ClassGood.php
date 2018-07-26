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
            $menu['one'] = static::select(static::$filed)->where(['class_depth' => 0])->get()->toArray();
            $menu['two'] = static::select(static::$filed)->where(['class_depth' => 1])->get()->toArray();
            $menu['three'] = static::select(static::$filed)->where(['class_depth' => 2])->get()->toArray();
            foreach ($menu['two'] as $key => $value) {
                $string = '';
                foreach ($menu['three'] as $k => $v) {
                    if ($v['class_prv'] == $value['class_id']) {
                        $string .= '<a href="">' . $v['class_name'] . '</a>';
                    }
                }
                $menu['two'][$key]['prv'] = $string;
            }
            foreach ($menu['one'] as $key => $value) {
                foreach ($menu['two'] as $k => $v) {
                    if ($v['class_prv'] == $value['class_id']) {
                        $menu['one'][$key]['prv'][] = $v;
                    }
                }
            }
            $res = '';
            $index = 'odd';
            foreach ($menu['one'] as $key => $value) {
                $child = '';
                if (isset($value['prv'])) {
                    foreach ($value['prv'] as $k => $v) {
                        $child .= '<dl><dt><h3><a href="http://127.0.0.1/v4/shop/index.php?act=search&amp;op=index&amp;cate_id=258">' . $v['class_name'] . '</a></h3></dt><dd class="goods-class">' . $v['prv'] . '</dd></dl>';
                    }
                }
                $res .= '<li cat_id="256" class="' . $index . '"><div class="class"><span class="arrow"></span><span class="ico"><img src="/images/category-pic-256.jpg"></span><h4><a href="http://127.0.0.1/v4/shop/index.php?act=search&amp;op=index&amp;cate_id=256">' . $value['class_name'] . '</a></h4></div><div class="sub-class" cat_menu_id="256"><div class="sub-class-content"><div class="recommend-class"></div>' . $child . '</div><div class="sub-class-right"><div class="adv-promotions"></div></div></div></li>';
                $index = $index == 'odd' ? 'even' : 'odd';
            }
            Storage::put('menu.log', $res);
        }
        return $res;
    }

}
