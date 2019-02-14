<?php

namespace App\Http\Controllers\dashboard;

use App\Activities;
use App\Bitacora;
use App\Client;
use App\contact;
use App\Project;
use App\tipoActividad;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ActivitiesController extends Controller
{
    public function index()
    {

        $activities = Activities::all();
        $clients = Client::all();
        $contacts = contact::all();
        $projects = Project::all();
        $users = User::all();
        $tipoactividad = tipoActividad::all();

        return view('dashboard.activities.index', compact('clients', 'contacts', 'projects', 'users', 'activities','tipoactividad'));
    }

    public function store(Request $request)
    {

        $data = request()->all();

        $this->validate($request, [
            'client_id' => 'required',
            'contact_id' => 'required',
            'project_id' => 'required',
            'user_id' => 'required',
            'start' => 'required',
            'end' => 'required',
            'time' => 'required',
            'tipoact_id' => 'required',
        ]);

        $activity = new Activities($data);
        $activity->completed = $request->has('completed') ? 1 : 0;
        $activity->save();

        $registro = new Bitacora();
        $registro->user_id = Auth::user()->id;
        $registro->activity_id = $activity->id;
        $registro->modulo = 'Actividades';
        $registro->message = 'creó la actividad ';
        $registro->type = 'create';
        $registro->save();




        return redirect()->route('dashboard.activities.index');

    }

    public function edit($id)
    {

        $activity = Activities::findOrFail($id);
        $users = User::all();
        $clients = Client::all();
        $contacts = contact::all();
        $projects = Project::all();
        $tipoactividad = tipoActividad::all();

        return view('dashboard.activities.edit', compact('clients', 'contacts', 'projects', 'users', 'activity','tipoactividad'));

    }

    public function update(Request $request, $id)
    {
        $activity = Activities::findOrFail($id);
        $activity->fill($request->all());
        $activity->completed = $request->has('completed') ? 1 : 0;
        $activity->update();

        $registro = new Bitacora();
        $registro->user_id = Auth::user()->id;
        $registro->activity_id = $activity->id;
        $registro->modulo = 'Actividades';
        $registro->message = 'editó una actividad ';
        $registro->type = 'update';
        $registro->save();


        return redirect()->route('dashboard.activities.index');
    }

    public function destroy($id){
        $activity = Activities::findOrFail($id);
        $activity->delete();

        $registro = new Bitacora();
        $registro->user_id = Auth::user()->id;
        $registro->activity_id = $activity->id;
        $registro->modulo = 'Actividades';
        $registro->message = 'eliminó ls actividad ';
        $registro->type = 'delete';
        $registro->save();

        return response()->json([
            'success' => true
        ]);
    }

    //PRUEBA PARA DYNAMIC DROPDOWNS-DEPENDENT SELECT BOX
    public function getContacts(Request $request, $id)
    {

        if ($request->ajax()) {
            $client = Client::findOrFail($id);

            return response()->json([
                "contacts" => $client->contacts,
                "projects" => $client->projects

            ]);
        }

        return null;
    }

    public function getActivity($id)
    {
        $activity = Activities::findOrFail($id);
        return response()->json([
            "success" => true,
            "activity" => $activity
        ]);
    }
}
