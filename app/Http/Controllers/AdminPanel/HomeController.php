<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
//use App\Models\settings;
use App\Models\setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function setting()
    {
        $data = setting::first();
        if ($data == null) // if setting table is empty add one record
        {
            $data = new setting();
            $data->title = 'project Title';
            $data->save();
            $data = $this->setting::first();
        }
        return view("admin.sittings",['data'=>$data]);
    }

    public function settingsUpdate(Request $request)
    {
        echo "save settings";
    }

}


