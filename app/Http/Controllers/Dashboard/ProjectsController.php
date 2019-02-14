<?php

namespace App\Http\Controllers\dashboard;

use App\Activities;
use App\ApprovedDocs;
use App\Bitacora;
use App\Client;
use App\contact;
use App\cotizaciones;
use App\Docs;
use App\Project;
use App\tipoCliente;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


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

    public function getContacts(Request $request, $id)
    {

        if ($request->ajax()) {
            $client = Client::findOrFail($id);

            return response()->json([
                "contacts" => $client->contacts

            ]);
        }

        return null;
    }

    public function store(Request $request)
    {
        $data = request()->all();

        $this->validate($request, [
            'name' => 'required',
            'phase' => 'required',
            'estimated_date' => 'required',
            'user_id' => 'required',
            'client_id' => 'required',
            'contact_id' => 'required'

        ]);

        $project = new Project ($data);
        $project->save();

        $registro = new Bitacora();
        $registro->user_id = Auth::user()->id;
        $registro->project_id = $project->id;
        $registro->modulo = 'Proyectos';
        $registro->message = 'creó el proyecto ';
        $registro->type = 'create';
        $registro->save();

        $message = 'Proyecto creado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.projects.index');
    }
    public function view($id)
    {
        $project = Project::findOrFail($id);
        $activities = Activities::all();
        $contacts = contact::all();

        return view('dashboard.projects.view', compact('project','activities','contacts'));
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

        $registro = new Bitacora();
        $registro->user_id = Auth::user()->id;
        $registro->project_id = $projects->id;
        $registro->modulo = 'Proyectos';
        $registro->message = 'actualizó el proyecto ';
        $registro->type = 'update';
        $registro->save();


        $message = 'Contacto actualizado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.projects.index');
    }
    public function destroy($id){
        $projects = Project::findOrFail($id);
        $projects->delete();

        $registro = new Bitacora();
        $registro->user_id = Auth::user()->id;
        $registro->project_id = $projects->id;
        $registro->modulo = 'Proyectos';
        $registro->message = 'elimió el proyecto ';
        $registro->type = 'delete';
        $registro->save();

        return response()->json([
            'success' => true
        ]);
    }


    public function documentsUpload(Request $request, $id)
    {

        $files = $request->file('file');
        /*$initialConfig = [];
        $initialPreview = [];*/

        if($request->hasFile('file'))
        {
            foreach ($files as $file)
            {
                $temp = explode(".", $file->getClientOriginalName());
                $extension = end($temp);
                $name = $file->getClientOriginalName();
                list($first) = explode(".", $name);
                $FileName =  $first . '-' . time(). '.' . $extension;
                Storage::disk('public')->put('docs/' . $FileName,  File::get($file));
                $document = new Docs();
                /*                $document->name = $file->getClientOriginalName();*/
                $document->project_id = $id;
                $document->file = 'docs/' . $FileName;
                /*array_push($initialConfig, ["caption" => $file->getClientOriginalName(), "size" => $file->getClientSize(), "width" => "120px", "url" => "/delete", "key" => 1]);
                array_push($initialPreview, asset('storage/docs/' . $FileName));*/
                $document->save();
            }
        }


        /*$responseFiles = [
            'initialPreview' => $initialPreview,
            'initialPreviewConfig' => $initialConfig
        ];

        return response()->json(
            $responseFiles
        );*/
        return response()->json([
            'success' => true
        ]);
    }

    public function documentsRemove($id)
    {
        $document = Docs::findOrFail($id);
        Storage::disk('public')->delete($document->file);
        $document->delete();

        return response()->json([]);
    }

    public function approvedDocUpload(Request $request, $id)
    {

        $files = $request->file('file');
        /*$initialConfig = [];
        $initialPreview = [];*/

        if($request->hasFile('file'))
        {
            foreach ($files as $file)
            {
                $temp = explode(".", $file->getClientOriginalName());
                $extension = end($temp);
                $name = $file->getClientOriginalName();
                list($first) = explode(".", $name);
                $FileName =  $first . '-' . time(). '.' . $extension;
                Storage::disk('public')->put('approved_docs/' . $FileName,  File::get($file));
                $document = new ApprovedDocs();
                /*                $document->name = $file->getClientOriginalName();*/
                $document->project_id = $id;
                $document->file = 'approved_docs/' . $FileName;
                /*array_push($initialConfig, ["caption" => $file->getClientOriginalName(), "size" => $file->getClientSize(), "width" => "120px", "url" => "/delete", "key" => 1]);
                array_push($initialPreview, asset('storage/docs/' . $FileName));*/
                $document->save();
            }
        }


        /*$responseFiles = [
            'initialPreview' => $initialPreview,
            'initialPreviewConfig' => $initialConfig
        ];

        return response()->json(
            $responseFiles
        );*/
        return response()->json([
            'success' => true
        ]);
    }

    public function approvedDocsRemove($id)
    {
        $document = ApprovedDocs::findOrFail($id);
        Storage::disk('public')->delete($document->file);
        $document->delete();

        return response()->json([]);
    }


}
