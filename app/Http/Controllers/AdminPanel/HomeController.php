<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
        public function index()
    {

        return view("home.index");
    }
    public function test()
    {
        return view("admin.index");
    }


}
