<?php
namespace App\Methods;
class Captcha
{
    public static $charset = 'abcdefghkmnprstuvwxyABCDEFGHKMNPRSTUVWXY3456789';    //随机因子
    public static $code;                           //验证码
    public static $codelen = 4;                    //验证码长度
    public static $width = 107;                    //宽度
    public static $height = 34;                    //高度
    public static $img;                            //图形资源句柄
    public static $font;                           //指定的字体
    public static $fontsize = 20;                  //指定字体大小
    public static $fontcolor;                      //指定字体颜色

    public static function Captcha()
    {
        static::$font = 'fonts/' . rand(1, 5) . '.ttf';
        static::$img = imagecreatetruecolor(static::$width, static::$height);
        $color = imagecolorallocate(static::$img, mt_rand(157, 255), mt_rand(157, 255), mt_rand(157, 255));
        imagefilledrectangle(static::$img, 0, static::$height, static::$width, 0, $color);
        $_len = strlen(static::$charset) - 1;
        for ($i = 0; $i < static::$codelen; $i++) {
            static::$code .= static::$charset[mt_rand(0, $_len)];
        }
        session(['code' => static::$code]);
        for ($i = 0; $i < 6; $i++) {
            $color = imagecolorallocate(static::$img, mt_rand(0, 156), mt_rand(0, 156), mt_rand(0, 156));
            imageline(static::$img, mt_rand(0, static::$width), mt_rand(0, static::$height), mt_rand(0, static::$width), mt_rand(0, static::$height), $color);
        }
        for ($i = 0; $i < 100; $i++) {
            $color = imagecolorallocate(static::$img, mt_rand(200, 255), mt_rand(200, 255), mt_rand(200, 255));
            imagestring(static::$img, mt_rand(1, 5), mt_rand(0, static::$width), mt_rand(0, static::$height), '*', $color);
        }
        $_x = static::$width / static::$codelen;
        for ($i = 0; $i < static::$codelen; $i++) {
            static::$fontcolor = imagecolorallocate(static::$img, mt_rand(0, 156), mt_rand(0, 156), mt_rand(0, 156));
            imagettftext(static::$img, static::$fontsize, mt_rand(-30, 30), $_x * $i + mt_rand(1, 5), static::$height / 1.4, static::$fontcolor, static::$font, static::$code[$i]);
        }
        header('Content-type:image/png');
        imagepng(static::$img);
        imagedestroy(static::$img);
    }


}