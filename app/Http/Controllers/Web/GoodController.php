<?php

namespace App\Http\Controllers\Web;

use App\Models\ClassGood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodController extends Controller
{

    public function detailed(Request $request)
    {
        return view('Web.GoodDetailed');
    }

    /**
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lists(Request $request)
    {
        $pos = ClassGood::positionById($request->input('class'));
        return view('Web.GoodLists', ['pos' => $pos,
            'class' => $request->input('class'),
        ]);
    }


}
