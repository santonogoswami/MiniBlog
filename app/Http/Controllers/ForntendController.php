<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForntendController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
}
