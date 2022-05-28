<?php

namespace App\Http\Controllers;

use App\Models\category;
//use App\Models\commend;
use App\Models\massege;
use App\Models\place;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\HomeController;  // for the home of front-end
use Illuminate\Support\Facades\DB;
use Mosquitto\Message;
use phpDocumentor\Reflection\Types\Parent_;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use App\Models\Comment;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function construct()
//    {
//        // $this->middleware('auth');
//    }

//    public function index()
//    {
//        $id = 1;
//        $nr = 'test';
//
//        return view('home.index', [
//            'id' => $id,
//            'nr' => $nr
//        ]);
//    }


  // it comes from Route
//     public function index()
//     {
//         echo "index function";
//     }

    public static function maincategorylist()
    {
        return category::where('Parent_id', '=' , 0)->with('children')->get();
    }


     public function index()
     {
//       echo 'home';
//       exit();
         $page='home';
         $sliderdata=place::limit(4)->get();
         $placelist1=place::limit(6)->get();
         $setting=setting::first();

   //dd($sliderdata);
         return view('home.index',
             [   'page'=>$page,
                 'sliderdata' => $sliderdata ,
                'placelist1' => $placelist1 ,
                 'setting' => $setting
             ]);
     }

    public function about()
    {
//   echo ' about ' ;
//   exit();
        $setting=setting::first();
        return view('home.about',
            [
                'setting' => $setting
            ]);
    }

    public function Reference()
    {
//        echo ' Reference ' ;
//        exit();
        $setting=setting::first();
        return view('home.Reference',
            [
                'setting' => $setting
            ]);
    }

    public function contact()
    {
//        echo ' Contact ' ;
//        exit();
        $setting=setting::first();
        return view('home.contact',
            [
                'setting' => $setting
            ]);
    }



    public function storemessage(Request $request)

    {
        $data= new massege();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Your message has been Sent , Thank you.');
    }


    public function storecomment(Request $request)

    {
        $data= new Comment();
        $data->user_id = Auth::id(); // logged in user id
        $data->place_id = $request->input('service_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('service',['id'=>$request->input('service_id')])->with('success','Your Comment has been Sent , Thank you.');

    }




    public function place($id)
    {
//        echo "echo place Id :", $id;
//        exit();

        $data=place::find($id);
        $images= DB::table('images')->where('place_id',$id)->get();
        $reviews= Comment::where('place_id',$id)->get();
        return view('home.place',
            [ 'data' => $data  ,
                'images' => $images ,
                'reviews' => $reviews
            ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function adminlogincheck(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
//dd($request);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

//     public function parameter($id, $number)
//     {
//
//         return view('home.test2',
//         ["id" => $id, "number" => $number]);
//         //how can we send the parameter to you and how to define the parameter
//
//          // echo "parameter 1 :", $id;
//        // echo "<br> parameter 2 :", $number;
//       //  echo "<br> sum parameter  :", $id + $number;
//     }
//
//     public function save(Request $reqest)
//     {
//         echo "save function";
//         echo "first name : " , $_REQUEST ["name"];
//         echo "last name : " , $_REQUEST ["last_name"];
//
//
//         return view(
//             'home.test2',[
//                 //how can we send the parameter to you and how to define the parameter
//                 'name' => $_REQUEST ["name"],
//                 'last_name' => $_REQUEST ["last_name"]
//             ]);
//     }

     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */



//     public function save(Request $reqest)
//     {
//         $name = $_REQUEST["name"];
//         $enail = $_REQUEST["enail"];
//
//
//         // echo "my save function";
//
//         return view('show', [
//             'name' => $name,
//             'enail' => $enail
//         ]);
//     }

 }
