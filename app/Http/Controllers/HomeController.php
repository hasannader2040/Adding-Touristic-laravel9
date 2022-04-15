<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $id = 1;
        $nr = 'test';

        return view('home.index', [
            'id' => $id,
            'nr' => $nr
        ]);
    }
}





//  // it comes from Route
//     public function index()
//     {
//         echo "index function";
//     }

//     public function index()
//     {
//         return view('home.index');
//     }


//     public function paramiter($id, $number)
//     {

//         return view('home.test2',
//         ["id" => $id, "number" => $number]);
//         //how can we send the parameter to you and how to define the parameter

//          // echo "paramiter 1 :", $id;
//        // echo "<br> paramiter 2 :", $number;
//       //  echo "<br> sum paramiter  :", $id + $number;
//     }

//     public function save(Request $reqest)
//     {
//         echo "save function";
//         echo "first name : " , $_REQUEST ["name"];
//         echo "last name : " , $_REQUEST ["last_name"];


//         return view(
//             'home.test2',[
//                 //how can we send the parameter to you and how to define the parameter
//                 'name' => $_REQUEST ["$name"],
//                 'last_name' => $_REQUEST ["$last_name"];
//             ]);
//     }

//     /**
//      * Show the application dashboard.
//      *
//      * @return \Illuminate\Contracts\Support\Renderable
//      */



//     public function save(Request $reqest)
//     {
//         $name = $_REQUEST["name"];
//         $enail = $_REQUEST["enail"];


//         // echo "my save function";

//         return view('show', [
//             'name' => $name,
//             'enail' => $enail
//         ]);
//     }
// }
