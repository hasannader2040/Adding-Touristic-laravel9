<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeControlle extends Controller
{
    public function index()
    {
        return view("admin.index");
    }




}


