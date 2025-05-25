<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Social;
use App\Models\HeroProperty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function page(){

    }

    public function heroData(Request $request){
        $data = HeroProperty::first();
        return response()->json($data);
    }
     public function aboutData(Request $request){
           $aboutData = About::all();
           return response()->json($aboutData);
    }
     public function socialData(Request $request){
        $socialData = Social::all();
        return response()->json($socialData);

    }
}
