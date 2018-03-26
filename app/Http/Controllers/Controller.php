<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public static function error($data = '')
    {
        return collect(['message' => 'false', 'data' => $data])->toJson();
    }

    public static function success($data = '')
    {
        return collect(['message' => 'success', 'data' => $data])->toJson();
    }

}
