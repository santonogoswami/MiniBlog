<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work;
use App\Models\About;
use App\Models\category2;

use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = work::all();
       
        // $abouts = aboutus::first();
        
                // DB::table('works')->get();
        // dd($abouts);
        return view('website.index',compact('data'));
        
    }
    
    public function category()
    {
        $ctg = category2::all();
       return view('website.category',compact('ctg'));
    }
    public function about()
    {
       return view('website.about');
    }
}
