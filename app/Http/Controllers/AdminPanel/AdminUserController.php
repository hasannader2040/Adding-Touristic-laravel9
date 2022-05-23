<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\place;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= User::all();
        return view('admin.user.index' , [
            'data'=>$data
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=User::with('roles')->find($id);
        //$data= User::find($id);
        $roles= Roule::all();
        return view('admin.user.show',[
                'data'=>$data,
                'rules'=>$roles

            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addrole(Request $request, $id)
    {
        $data = new RoleUser();
        $data->user_id=$id;
        $data->roule_id=$request->roule_id;
        $data->save();
        return redirect(route('admin.user.show',['id'=>$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $uid
     * @return \Illuminate\Http\Response
     */
    public function destroyrole($uid,$rid)
//    {
//        $data=RoleUser:: where($uid,$rid);
//
//        $data->delete();
//        return redirect('admin.use.show',['id'=>$uid]);
//    }
    {
        $user=\http\Client\Curl\User:: find($rid); #many to many relation delete related data

        $user->delete();
        return redirect('admin.use.show',['id'=>$uid]);
    }

}
