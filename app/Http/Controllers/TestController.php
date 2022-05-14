<?php

namespace App\Http\Controllers;

use App\Models\place;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function here($id)
    {
        $data=place::find($id);
        return view("home.place",
            [
                'data'=>$data
            ]
        );
            ;
//        return $data;
    }

//    public function here()
//    {
//        dd('hello');
//    }
}

