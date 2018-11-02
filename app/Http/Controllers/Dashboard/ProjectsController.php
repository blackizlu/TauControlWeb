<?php

namespace App\Http\Controllers\dashboard;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all(); /*Variable users muestra los usuarios en lista*/
        return view('dashboard.projects.index', compact('projects'));
    }
    public function add()
    {
        $projects = Project::all(); /*Variable users muestra los usuarios en lista*/
        return view('dashboard.projects.add', compact('projects'));
    }
}
