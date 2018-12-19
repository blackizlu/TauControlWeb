<?php

namespace App\Http\Controllers\dashboard;

use App\Project;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportesController extends Controller
{
    public function index(){

        $users = User::all();
        $projects = Project::all();

        return view('dashboard.reportes.index', compact('users','projects'));
    }


}
