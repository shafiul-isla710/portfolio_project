<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function ProjectPage(){
      $seo = DB::table('seo_properties')->where('pageName','project')->first();
      return  Inertia::render('ProjectPage', compact('seo'));

    }
    public function projectData(Request $request){
        $projectData = Project::all();
        return response()->json($projectData);
    }
}
