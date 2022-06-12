<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
//use App\Models\setting;
use App\Models\setting;
//use App\Models\setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

//    I made some changes in setting
    public function setting()
    {
        $data = setting::first();
        if ($data == null) // if setting table is empty add one record
        {
            $data = new setting();
//            dd($data);
            $data->title = 'project Title';
            $data->save();
            $data = $this->setting::first();
        }
        return view("admin.sittings",['data'=>$data]);
    }

    public function settingsUpdate(Request $request)
    {

//        $id=$request->input('id');
//        $id=$request->id;
        $data=setting::find(1);
//        dd($data);
//        exit();
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->company=$request->input('company');
        $data->address=$request->input('address');
        $data->phone=$request->input('phone');
        $data->fax=$request->input('fax');
        $data->email=$request->input('email');
        $data->smtpserver=$request->input('smtpserver');
        $data->smtpemail=$request->input('smtpemail');
        $data->smtppassword=$request->input('smtppassword');
        $data->smtpsupport=$request->input('smtpsupport');
        $data->facebook=$request->input('facebook');
        $data->instagram=$request->input('instagram');
        $data->twitter=$request->input('twitter');
        $data->aboutus=$request->input('aboutus');
        $data->contact=$request->input('contact');
        $data->references=$request->input('references');

        $data->save();
        return redirect()->route('admin.setting');
//        $data->contact=$request->input('contact');


//        echo "save setting";
    }

}


