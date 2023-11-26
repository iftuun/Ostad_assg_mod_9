<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get(); // Fetch projects in descending order
        return view('projects.index', ['projects' => $projects]);
    }
}
