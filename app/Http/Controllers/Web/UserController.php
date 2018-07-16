<?php

namespace App\Http\Controllers\Web;

use App\Methods\Operation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;

class UserController extends Controller
{

    public function register()
    {
        return view('Web.register');
    }

    public function login()
    {
        return view('Web.login');
    }

    public function test()
    {
        $tables = DB::select('show tables');
        $mysql = '';
        foreach ($tables as $value) {
            $table = DB::select('show create table `' . $value->Tables_in_mall . '`');
            foreach ($table[0] as $key => $v) {
                if ($key == 'Create Table') {
                    $mysql .= $table[0]->$key . ';\r\n';
                }
            }
            $file = Schema::getColumnListing($value->Tables_in_mall);
            //dump($file);
            $data = DB::table($value->Tables_in_mall)->select($file)->get();
            $file = join(',', $file);
            foreach ($data as $key => $va) {
                $vals = get_object_vars($va);
                $vals = array_values($vals);
                $vals = array_map('addslashes', $vals);
                $vals = join("','", $vals);
                $vals = "'" . $vals . "'";
                $mysql .= "INSERT INTO `$value->Tables_in_mall` ($file) VALUES ($vals) ";
            }
        }
        $file = 'mysqldump';
        if (!Storage::exists($file)) {
            Storage::makeDirectory($file);
        }
        $pat = 'mysqldump/' . date('Y-m-d') . $_SERVER['REQUEST_TIME'] . rand(100000, 900000) . '.sql';
        Storage::append($pat, $mysql);
    }

    public function geturldata($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        $content = curl_exec($ch);
        return $content;
    }


}