<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\message;
use App\Models\place;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MessagesController extends Controller
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
        $data= message::all();
//        dd($data);  // dont forget to add the names in the form
        return view('admin.message.index' , [
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
    public function show()
    {
//dd($id);

        $data= message::find(1);
//        dd('$data');
        $data->status='Read';
//        $data->$id;
        return view('admin.message.show',
            [
                'data'=>$data,
//                'id'=>$id
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
    public function update(Request $request, $id)
    {
        $data= message::findOrFail($id);
//        dd($data->note=$request->note);
        $data->note=$request->note;
        $data->save();
        return redirect(route('admin.message.show',['id'=>$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        if (Storage::exists('data->image')) {
//            Storage::delete('data->image');
//        }
//        $data->delete();

        $data=message:: find($id);

        $data->delete();
        return redirect(route('admin.message.index'));
    }
}
