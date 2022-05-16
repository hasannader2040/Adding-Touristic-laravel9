<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Image;
use App\Models\place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Pid)
    {
        $place=place::find($Pid);

        //$images = Image::where('place_id', $Pid);
        $images= DB::table('images')->where('place_id',$Pid)->get(); // I didnt understand it very well
  // it didnt import itself
        return view(
            'admin.image.index',
            [
                'place' => $place ,
                'images' => $images
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $Pid)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$Pid)
    {
        $data = new Image();  // its  fot inserting it
        $data->place_id = $Pid;
        $data->title = $request->title;
        if($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin.image.index',['Pid'=>$Pid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id,$Pid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$Pid)
    { // make sure about importing
        $data=Image:: find($id);
        if ( $data->image && Storage::disk('public')->exists($data->image)) // I have to understand it much better
        {
        Storage::delete($data->image);
    }
        $data->delete();
        return redirect()->route('admin.Image.index',['Pid'=>$Pid]);
    }
}
