<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Resume;
use App\Models\Language;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function page(){

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
