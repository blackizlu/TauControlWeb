<?php

namespace App\Http\Controllers\dashboard;

use App\Client;
use App\Project;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        $projects = Project::orderBy('estimated_date')->get();
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

        $project = new Project ($data);
        $project->save();

        $message = 'Proyecto creado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.projects.index');
    }

    public function view($id)
    {
        $project = Project::findOrFail($id);

        return view('dashboard.projects.view', compact('project'));
    }
}
