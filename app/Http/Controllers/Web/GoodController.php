<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;

class GoodController extends Controller
{
    private $file = 'Web.Good';

    public function detailed(Request $request)
    {
        $id = is_null($request->id) ? 15 : $request->id;
        $good = Models\Good::find($id);
        return view($this->file . 'Detailed', [
            'good' => $good
        ]);
    }

}
