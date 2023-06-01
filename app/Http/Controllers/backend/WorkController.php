<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
class WorkController extends Controller
{
         //index Method__//
         public function index(){
            $data = Work::all();
            return view('auth/modules/MyWork/index', compact('data'));

        }

    //__create Method__//
    public function create(){
    return view('auth/modules/MyWork/create');
    }
    //__Skill Method__//
    public function store(Request $request){
        $request->validate([
           
                'before_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'after_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'image_caption' => 'required',
                'image_description' => 'required',
        ]);
    
        $works = new Work();
     // image code start
     $before_image= time().'.'. $request->before_image->extension();
     $request->before_image->move(public_path('works'), $before_image);
     $path = "/works/".$before_image;
     $works->before_image = $path;
     // image code End
 
     // image code start
     $after_image= time().'.'. $request->after_image->extension();
     $request->after_image->move(public_path('works'), $after_image);
     $path = "/works/".$after_image;
     $works->after_image = $path;
     // image code End
 
     $works->image_caption = $request->image_caption;
     $works->image_description = $request->image_description;
     $works->save();
 
             return redirect()->back();
         }
 
    

    //__ Edit Method__//
    public function edit($id){
    $data=Work::find($id);
    return view('auth/modules/MyWork/edit', compact('data'));
    }
        //_Update Method__//
        public function update(Request $request, $id)
        {
            $request->validate([
                'before_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'after_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'image_caption' => 'required',
                'image_description' => 'required',
            ]);
            $works = Work::find($id);
    // image code start
    $before_image= time().'.'. $request->before_image->extension();
    $request->before_image->move(public_path('works'), $before_image);
    $path = "/works/".$before_image;
    $works->before_image = $path;
    // image code End

    // image code start
    $after_image= time().'.'. $request->after_image->extension();
    $request->after_image->move(public_path('works'), $after_image);
    $path = "/works/".$after_image;
    $works->after_image = $path;
    // image code End

    $works->image_caption = $request->image_caption;
    $works->image_description = $request->image_description;
    $works->save();

            return redirect()->back();
        }

        //__Delete Method__//
    public function destroy($id)
    {

        Work::destroy($id);
       return redirect()->back();
    }
}
