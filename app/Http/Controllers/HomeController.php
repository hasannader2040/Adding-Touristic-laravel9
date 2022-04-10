<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function construct()
    {
        // $this->middleware('auth');
    }

    function index()
    {
        $id = 1;
        $nr = 'test';

        return view('home.index', [
            'id' => $id,
            'nr' => $nr
        ]);
    }
}
