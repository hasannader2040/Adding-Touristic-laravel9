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

      $data = place::all();
        //echo "category list";
        return view(
            'admin.place.index',
            [
                'data' => $data,
               //'title'=>$title

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
        $data = category::all();
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
//        return $request;
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->city = $request->city;
        $data->country = $request->country;
        $data->location = $request->location;
        $data->status = $request->status;

        if ($request->file('image')) {
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
        $category = category::find($data->category_id);
        //return $id;
        return view("admin.place.show",
        [
            'data'=>$data,
            'category' => $category
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
         $categories = category::all();
        $category = category::find($data->category_id);

            return view("admin.place.edit",
            [
                'data'=>$data,
                'categories' => $categories,
                'category' => $category
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
        $data->location = $request->location;
        $data->status = $request->status;
//        dd($request->all());


        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();

//        if ($request->file('image') == null) {
//            $data = "";
//        }else{
//            $data = $request->file('image')->store('images');
//        }

        return redirect('admin/place');

    }

//        if ($req->file('image'))
//        {
//            $data->image = $req->file('image')->store('images');
//        }
//        else
//        {
//            $data->image=$data->images;
//
//        }

    // this ocde insted of save but its not saving it
//        if($data != ""){
//            $data->save();
//        }
//        ************
//        $data->save();
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(place $place,$id)
    {
//        if (Storage::exists('data->image')) {
//            Storage::delete('data->image');
//        }
//        $data->delete();

        $data=place:: find($id);

        if ( $data->place && Storage::disk('public')->exists('data->place')) // I have to understand it much better
        {
            Storage::delete($data->place);
        }
        $data->delete();
        return redirect('admin/place');
    }
}
