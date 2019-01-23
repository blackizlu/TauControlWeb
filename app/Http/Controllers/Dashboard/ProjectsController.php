<?php

namespace App\Http\Controllers\dashboard;

use App\Activities;
use App\Client;
use App\cotizaciones;
use App\Project;
use App\tipoCliente;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all(); /*Variable users muestra los usuarios en lista*/
        $cotizacion = cotizaciones::all();
        $clients = Client::all();

        return view('dashboard.projects.index', compact('projects','clients','cotizacion'));
    }
    public function add()
    {
        $projects = Project::orderBy('estimated_date')->get();
        $users =    User::all();
        $clients =  Client::all();
        $tipocliente = tipoCliente::all();


        return view('dashboard.projects.add', compact('projects', 'users','clients','tipocliente'));
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

//    public function savedocs(Request $request){
//
//        $docs = $request->file('docs');
//
//        foreach ($docs as $doc){
//
//            $fileName = $file->getClientOriginalName();
//            Storage::disk('public')->put('docs/'. time() . $fileName, File::get($doc));
//            $this->attributes['file'] = 'cotizacion/' . $fileName;
//
//        }
//
//
//    }

    public function view($id)
    {
        $project = Project::findOrFail($id);
        $activities = Activities::all();

        return view('dashboard.projects.view', compact('project','activities'));
    }
    public function edit($id){

        $projects = Project::findOrFail($id);
        $clients = Client::all();
        $users =    User::all();
        $tipocliente = tipoCliente::all();

        return view('dashboard.projects.edit', compact('projects','clients','users','tipocliente'));


    }

    public function update(Request $request, $id)
    {
        $projects = Project::findOrFail($id);
        $projects->fill($request->all());
        $projects->update();


        $message = 'Contacto actualizado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.projects.index');
    }

    public function destroy($id){
        $projects = Project::findOrFail($id);
        $projects->delete();

        return response()->json([
            'success' => true
        ]);
    }


}
