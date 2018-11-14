<?php

namespace App\Http\Controllers\dashboard;

use App\Client;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all(); /*Variable users muestra los usuarios en lista*/
        $clients = Client::all();

        return view('dashboard.projects.index', compact('projects','clients'));
    }
    public function add()
    {
        $projects = Project::all(); /*Variable users muestra los usuarios en lista*/
        $users =    User::all();
        $clients =  Client::all();

        return view('dashboard.projects.add', compact('projects', 'users','clients'));
    }

    public function store(Request $request)
    {
        $data = request()->all();

        $this->validate($request, [
            'name' => 'required',
            'phase' => 'required',
            'estimated_date' => 'required',
            'user_id' => 'required',
            'client_id' => 'required'

        ]);

        $projects = new Project ($data);
        $projects->save();

        /*$message = 'Proyecto creado con éxito';
        Session::flash('message', $message);*/

        return view('dashboard.projects.index', compact('projects','clients'));
    }

    public function view($id)
    {
        $project = Project::findOrFail($id);

        return view('dashboard.projects.view', compact('project'));
    }
}
