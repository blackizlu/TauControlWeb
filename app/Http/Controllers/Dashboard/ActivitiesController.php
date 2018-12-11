<?php

namespace App\Http\Controllers\dashboard;

use App\Activities;
use App\Client;
use App\contact;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivitiesController extends Controller
{
    public function index(){

        $activities = Activities::all();
        $clients = Client::all();
        $contacts = contact::all();
        $projects = Project::all();
        $users = User::all();

        return view('dashboard.activities.index', compact('clients', 'contacts','projects','users','activities'));
    }


    public function store(Request $request){

        $data = request()->all();

        $this->validate($request, [
            'client_id' => 'required',
            'contact_id' => 'required',
            'project_id' => 'required',
            'user_id' => 'required',
            'deadline' => 'required',
            'time' => 'required',
            'activity' => 'required'
        ]);

        $activity = new Activities($data);
        $activity->completed = $request->has('completed') ? 1:0;
        $activity->save();

        return redirect()->route('dashboard.activities.index');

    }

    public function edit($id){

        $activity = Activities::findOrFail($id);
        $users = User::all();
        $clients = Client::all();
        $contacts = contact::all();
        $projects = Project::all();
        return view('dashboard.activities.index', compact('clients', 'contacts','projects','users','activity'));


    }

    public function update(Request $request)
    {
        $activity = Activities::findOrFail($request->activity_id);
        $activity->fill($request->all());
        $activity->update();

        return redirect()->back();
    }

    public function destroy(Request $request){

        $activity = Activities::findOrFail($request->activity_id);
        $activity->delete();
        return redirect()->route('dashboard.activities.index');

    }


        //PRUEBA PARA DYNAMIC DROPDOWNS-DEPENDENT SELECT BOX
   public function getContacts(Request $request, $id){

        if($request->ajax()){
            $client = Client::findOrFail($id);

            return response()->json([
                "contacts" => $client->contacts,
                "projects" => $client->projects

            ]);
        }

   }

}
