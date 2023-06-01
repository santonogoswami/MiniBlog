<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;
class PriceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
        //index Method__//
        public function index(){
            $data = Price::all();
            return view('auth\modules\Price\index', compact('data'));

        }

    //__create Method__//
    public function create(){
    return view('auth\modules\Price\create');
    }
    //p Method__//
    public function store(Request $request){
    $request->validate([

        'serviceName' => 'required',
        'serviceIcon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        'basic' => 'required',
        'basicPrice' => 'required',
        'simple' => 'required',
        'simplePrice' => 'required',
        'medium' => 'required',
        'mediumPrice' => 'required',
        'complex' => 'required',
        'complexPrice' => 'required',
        'superComplex' => 'required',
        'superComplexPrice' => 'required',
        'multiComplex' => 'required',
        'multiComplexPrice' => 'required',
    ]);
    $prices=new Price;
    $prices->serviceName = $request->serviceName;
      // image code start
      $serviceIcon= time().'.'. $request->serviceIcon->extension();
      $request->serviceIcon->move(public_path('prices'), $serviceIcon);
      $path = "/prices/".$serviceIcon;
      $prices->serviceIcon = $path;
      // image code End
    $prices->basic = $request->basic;
    $prices->basicPrice = $request->basicPrice;
    $prices->simple = $request->simple;
    $prices->simplePrice = $request->simplePrice;
    $prices->medium = $request->medium;
    $prices->mediumPrice = $request->mediumPrice;
    $prices->complex = $request->complex;
    $prices->complexPrice = $request->complexPrice;
    $prices->superComplex = $request->superComplex;
    $prices->superComplexPrice = $request->superComplexPrice;
    $prices->multiComplex = $request->multiComplex;
    $prices->multiComplexPrice = $request->multiComplexPrice;
    $prices->save();
    return redirect('auth/modules/Price/index');
    }

    //__ Edit Method__//
    public function edit($id){
    $data=Price::find($id);
    return view('auth/modules/Price/edit', compact('data'));
    }
        //_Update Method__//
        public function update(Request $request, $id)
        {
            $request->validate([
                'serviceName' => 'required',
                'serviceIcon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'basic' => 'required',
                'basicPrice ' => 'required',
                'simple' => 'required',
                'simplePrice' => 'required',
                'medium' => 'required',
                'mediumPrice' => 'required',
                'complex' => 'required',
                'complexPrice' => 'required',
                'superComplex' => 'required',
                'superComplexPrice' => 'required',
                'multiComplex' => 'required',
                'multiComplexPrice' => 'required',

            ]);
            $prices = Price::find($id);
            $prices->serviceName = $request->serviceName;
   // image code start
   $serviceIcon= time().'.'. $request->serviceIcon->extension();
   $request->serviceIcon->move(public_path('prices'), $serviceIcon);
   $path = "/prices/".$serviceIcon;
   $prices->serviceIcon = $path;
   // image code End
    $prices->basic = $request->basic;
    $prices->basicPrice = $request->basicPrice;
    $prices->simple = $request->simple;
    $prices->simplePrice = $request->simplePrice;
    $prices->medium = $request->medium;
    $prices->mediumPrice = $request->mediumPrice;
    $prices->complex = $request->complex;
    $prices->complexPrice = $request->complexPrice;
    $prices->superComplex = $request->superComplex;
    $prices->superComplexPrice = $request->superComplexPrice;
    $prices->multiComplex = $request->multiComplex;
    $prices->multiComplexPrice = $request->multiComplexPrice;
            $prices->save();

            return redirect()->back();
        }

        //__Delete Method__//
    public function destroy($id)
    {

    Price::destroy($id);
       return redirect()->back();
    }
}
