<?php

namespace App\Http\Controllers;

use Hamcrest\FeatureMatcherTest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $sliders=[];
        $homepages = new Request();
        $homepages->whyframe_text = "sa";
        return view('home',compact('sliders','homepages'));
    }
}
