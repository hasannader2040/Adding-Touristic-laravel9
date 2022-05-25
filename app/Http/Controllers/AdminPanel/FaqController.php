<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\place;
use Illuminate\Http\Request;
use \App\Http\Controllers\AdminPanel;
use App\Models\Faq;
//use App\Http\Controllers\AdminPanel;
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
//            echo "faq";
//            exit();
            $data=Faq::all();
            return view(
                'admin.faq.index',
                [
                    'data'=>$data
                ]
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        echo "faq( list";
//        exit();
        $data = Faq::all();
        return view(
            'admin.faq.create',
            [
              'data'=>$data
            ]
        );
//
//        //  echo "category create";
//        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Faq();  // its  fot inserting it
        $data->question = $request->question;
        $data->answer = $request->answer;
        $data->status = $request->status;
        $data->save();
        return redirect('admin/faq');
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
        $data = Faq::find($id);
        return view(  'admin.faq.edit',
            [ 'data' => $data
            ]);
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

        $data= Faq::find($id);
        $data->question = $request->question;
        $data->answer = $request->answer;
        $data->status = $request->status;
        $data->save();
        return redirect(to:'admin/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data= Faq::find($id);

        $data->delete();
        return redirect(to:'admin/faq');
    }
}
