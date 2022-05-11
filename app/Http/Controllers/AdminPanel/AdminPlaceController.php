<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\place;
//use App\Models\place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPlaceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $data = Category::all();
        //echo "category list";
        return view(
            'admin.place.index',
            [
                'data' => $data

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
        $data = place::all();
        //echo "category list";
        return view(
            'admin.place.create',
            [
                'data' => $data

            ]
        );

        //  echo "category create";
        return view('admin.place.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new place();  // its  fot inserting it
        //$data->id ;
        $data->category_id=0;
        $data->user_id = 0; //$request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->city = $request->city;
        $data->country = $request->country;
        $data->location = $request->location;
        $data->status = $request->status;
        if ($request->file('image')->store('images')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/place');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(place $place, $id)
    {
        //echo "show area : " ,$id ;
        $data=place::find($id);
        //return $id;
        return view("admin.place.show",
        [
            'data'=>$data
        ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req,$id,)


    {
      // echo "edit this page with id parameter" , $id; // just for trying to make sure its working or not
        //return $id;

        $data=place::find($id);
         $datalist = place::all();
        return view("admin.place.edit",
            [
                'data'=>$data,
                'datalist' => $datalist
            ]
        );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,place $place, $id)
    {
        $data=place::find($id);
        //$data->id= $request->id ;
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->city = $request->city;
        $data->country = $request->country;
        $data->locatıon = $request->locatıon;
        $data->price = $request->price;
        $data->status = $request->status;
        if ($request->file('image')->store('images')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/place');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(place $place,$id)
    {

        $data=place:: find($id);
        if (Storage::exists('data->image')) {
            Storage::delete('data->image');
        }
        return redirect('admin/place');
    }
}
