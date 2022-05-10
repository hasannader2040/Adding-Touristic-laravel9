<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class categoryController extends Controller
{
    protected array $appends = [ // I am not sure about Array
        'getParentsTree'
    ];
  public static function getParentsTree($catecory,$title)
  {
     if ($catecory->parant_id == 0)
     {
         return $title ;
     }
     $parent = catecory::find($catecory->parent_id);
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


      $data = Category::all();
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
        $data = Category::all();
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
        return $request;

        $data = new category();  // its  fot inserting it

        $data->parent_id = 0;
        $data->title = $request->title;
        $data->keywordes = $request->keywordes;
        $data->desctiption = $request->desctiption;
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
     * @param  \App\Models\Photo  $photo
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
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req,$id,)


    {
      // echo "edit this page with id parameter" , $id; // just for trying to make sure its working or not
        //return $id;

        $data=category::find($id);
         $datalist = category::all();
        return view("admin.category.edit",
            [
                'data'=>$data,  'datalist' => $datalist
            ]
        );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , category $category, $id )
    {
            $data=category::find($id);
            $data->parent_id = 0;
            $data->title = $request->title;
            $data->keywords = $request->keywords;
            $data->description = $request->description;
            $data->status = $request->status;
            if ($request->file('image')->store('images')){
                $data->image=$request->file('image')->store('images');
            }

            $data->save();
            return redirect('admin/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category,$id)
    {

        $data=category:: find($id);
        Storage::delete('data->image');
        return redirect('admin/category');
    }
}
