<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //index Method__//
    public function index(){
        $data = About::all();
        return view('auth/modules/About/index', compact('data'));

    }

//__create Method__//
public function create(){
return view('auth/modules/About/create');
}
//About Method__//
public function store(Request $request){
$request->validate([
    'contents' => 'required',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    'status' => 'required',

]);
$About=new About;
$About->contents = $request->contents;
 // image code start
 $image= time().'.'. $request->image->extension();
 $request->image->move(public_path('About'), $image);
 $path = "/About/".$image;
 $About->image = $path;
 // image code End
$About->status = $request->status;

$About->save();
return redirect('auth/modules/About/index');
}

//__ Edit Method__//
public function edit($id){
$data=About::find($id);
return view('auth/modules/About/edit', compact('data'));
}
    //_Update Method__//
    public function update(Request $request, $id)
    {
        $request->validate([
      'contents' => 'required',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    'status' => 'required',

        ]);
        $About = About::find($id);

        $About->contents = $request->contents;
        // Image code start
        if ($request->hasFile('image')) {
            $image = time().'.'. $request->image->extension();
            $request->image->move(public_path('About'), $image);
            $path = "/About/".$image;
            $About->image = $path;
        }
        // Image code end
        $About->status = $request->status;
        $About->save();

        return redirect('auth/modules/About/index')->back();
    }

    //__Delete Method__//
public function destroy($id)
{

About::destroy($id);
   return redirect()->back();
}
}
