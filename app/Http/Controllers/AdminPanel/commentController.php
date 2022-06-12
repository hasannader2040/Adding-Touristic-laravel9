<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\commend;
use App\Models\Comment;
use App\Models\message;
use App\Models\User;
use Illuminate\Http\Request;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//       echo 'the best' ;
//       exit();
        $data= Comment::all();
//        dd($data);  // dont forget to add the names in the form
        return view('admin.comment.index' , [
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
        //$data=User::with('roles')->find($id);
        //$data= User::find($id);
        //$roles= Comment::all();
        $comment=Comment::find($id);
        $user_id=$comment->user_id;
        $user=User::find($user_id);
        return view('admin.comment.show',[
                'comment'=>$comment,'user'=>$user

            ]
        );
    }

//    public function show($id)
//    {
//        $data= User::find($id);
//        $roles= Comment::all();
//        return view('admin.comment.show',compact('data','roles')
//
//        );
//    }

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
    public function update(Request $request, $id)
    {
        $data=Comment::find($id);
        $data->status=$request->status;
        $data->save();
        return redirect(route('admin.comment.show',['id'=>$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Comment:: find($id);

        $data->delete();
        return redirect()->route('admin.comment.index');
    }
}

//public function destroy($id)
//{
//    $data=commend:: find($id);
//
//    $data->delete();
//    return redirect()->route('admin.comment.index',compact('data')));
//    }
//}
