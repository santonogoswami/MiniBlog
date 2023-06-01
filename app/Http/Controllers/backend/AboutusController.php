<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aboutus;
class AboutusController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

      //index Method__//
      public function index(){
        $data = aboutus::all();
        return view('auth.modules.about_us.index', compact('data'));

    }

    //__create Method__//
   public function create(){
    return view('auth.modules.about_us.create');
}

//store Method__//
public function store(Request $request){
    $request->validate([


        'aboutus_description' => 'required',
       

    ]);
    $aboutus=new aboutus;

    $aboutus->aboutus_description = $request->aboutus_description;
   
    

    $aboutus->save();
    return redirect('auth/modules/about_us/index');
    }
//__ Edit Method__//
public function edit($id){
    $data=aboutus::find($id);
    return view('auth/modules/about_us/edit', compact('data'));
    }
        //_Update Method__//
        public function update(Request $request, $id)
        {
            $request->validate([

                'aboutus_description' => 'required',
              

            ]);
            $aboutus = aboutus::find($id);



    $aboutus->aboutus_description = $request->aboutus_description;
   

    $aboutus->save();
    return redirect('auth/modules/about_us/index');
    }

        //__Delete Method__//
public function destroy($id)
{

    aboutus::destroy($id);
   return redirect()->back();
} 
}
