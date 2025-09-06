<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\Language;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function ResumePage(){
        
        $seo = DB::table('seo_properties')->where('pageName','resume')->first();
        return Inertia::render('ResumePage', compact('seo'));

    }
    public function resumeLink(Request $request){
        $resumeLink = Resume::all();
        return response()->json($resumeLink);

    }
    public function experienceData(Request $request){
        $experienceData = Experience::all();
        return response()->json($experienceData);

    }
    public function educationData(Request $request){
        // Assuming you have an Education model similar to Experience
        $educationData = Education::all(); // Replace with your actual model
        return response()->json($educationData);

    }
    public function skillData(Request $request){
        $skillData = Skill::all(); // Assuming you have a Skill model
        return response()->json($skillData);
    }
    public function languageData(Request $request){
        // Assuming you have a Language model similar to Skill
        $languageData = Language::all(); // Replace with your actual model
        return response()->json($languageData);

    }
}
