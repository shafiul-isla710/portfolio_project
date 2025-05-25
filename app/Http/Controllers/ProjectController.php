<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function page(){

    }
    public function projectData(Request $request){
        $projectData = Project::all();
        return response()->json($projectData);

    }
}
