<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category2;
class Category2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

      //index Method__//
      public function index(){
        $data = category2::all();
        return view('auth.modules.category.index', compact('data'));

    }

    //__create Method__//
   public function create(){
    return view('auth.modules.category.create');
}

//store Method__//
public function store(Request $request){
    $request->validate([


        'name' => 'required',
        'slug' => 'required',
        'serial' => 'required',
        'status' => 'required',

    ]);
    $category2s=new category2;

    $category2s->name = $request->name;
    $category2s->slug = $request->slug;
    $category2s->serial = $request->serial;
    $category2s->status = $request->status;

    $category2s->save();
    return redirect('auth/modules/category/index');
    }
//__ Edit Method__//
public function edit($id){
    $data=category2::find($id);
    return view('auth/modules/category/edit', compact('data'));
    }
        //_Update Method__//
        public function update(Request $request, $id)
        {
            $request->validate([

                'name' => 'required',
                'slug' => 'required',
                'serial' => 'required',
                'status' => 'required',

            ]);
            $category2s = category2::find($id);



    $category2s->name = $request->name;
    $category2s->slug = $request->slug;
    $category2s->serial = $request->serial;
    $category2s->status = $request->status;

    $category2s->save();
    return redirect('auth/modules/category/index');
    }

        //__Delete Method__//
public function destroy($id)
{

    category2::destroy($id);
   return redirect()->back();
}
}
