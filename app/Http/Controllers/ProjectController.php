<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function ProjectPage(){

      return  Inertia::render('ProjectPage');

    }
    public function projectData(Request $request){
        $projectData = Project::all();
        return response()->json($projectData);

    }
}
