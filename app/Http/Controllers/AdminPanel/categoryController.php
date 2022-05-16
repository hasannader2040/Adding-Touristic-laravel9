<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\category;
//use App\Models\Photo;
use App\Models\place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class categoryController extends Controller
{
    protected array $appends = [ // I am not sure about Array
        'getParentsTree'
    ];
    public static function getParentsTree($category,$title)
    {
        if ($category->parent_id == 0)
        {
            return $title ;
        }
        $parent = category::find($category->parent_id);
        $title = $parent->title . '>' . $title;
        return categoryController::getParentsTree($parent,$title);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data = category::all();
        //echo "category list";
        return view(
            'admin.category.index',
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
        $data = category::all();
        //echo "category list";
        return view(
            'admin.category.create',
            [
                'data' => $data

            ]
        );

        //  echo "category create";
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $data = new category();  // its  fot inserting it
        $data->parent_id = $request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if ($request->file('image')->store('images')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category, $id)
    {
        //echo "show area : " ,$id ;
        $data=category::find($id);
        //return $id;
        return view("admin.category.show",
            [
                'data'=>$data
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category ,$id,)
    {
        // echo "edit this page with id parameter" , $id; // just for trying to make sure its working or not
        //return $id;

        $data=category::find($id);
        $datalist = category::all();
        return view("admin.category.edit",
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
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request , category $category, $id )
    {
        $data=category::find($id);
        $data->parent_id = $request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
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
     * @param  \App\Models\Photo  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category,$id)
    {

        $data=category:: find($id);
        if ( $data->category && Storage::disk('public')->exists('data->category')) // I have to understand it much better
        {
            Storage::delete($data->category);
        }
        $data->delete();
        return redirect('admin/category');
    }
}
