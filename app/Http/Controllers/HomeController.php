<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Social;
use App\Models\HeroProperty;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function page(){
        return Inertia::render('text');
    }
    public function HomePage(){
        return Inertia::render('HomePage');
    }
    public function AboutPage(){
        return Inertia::render('AboutPage');
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

    public function contactRegistration(Request $request){

      $token = 'Hello Bangladesh';
      $cookie = cookie('token', $token, 60 * 24 * 30); // 30 days
      return response()->json(['message' => 'Cookie set successfully'])->cookie($cookie);

    }
    public function deleteCookie(Request $request){
        
    }
}
