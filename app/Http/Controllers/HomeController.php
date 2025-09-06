<?php

namespace App\Http\Controllers;


use Inertia\Inertia;
use App\Models\About;
use App\Models\Social;
use App\Models\HeroProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   
    public function HomePage(){
        $seo = DB::table('seo_properties')->where('pageName','home')->first();
        return Inertia::render('HomePage',compact('seo'));
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
