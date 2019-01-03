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

      /*  $winCount = Project::where('columnName','Win')->count();
        $lostCount = Project::where('columnName','Lost')->count();*/

        $Cotizado = Project::where('phase', 'Cotizado')->count();
        $Ganado = Project::where('phase', 'Ganado')->count();
        $Lead = Project::where('phase', 'Lead')->count();
        $Negociacion = Project::where('phase', 'Negociacion')->count();
        $Pricing = Project::where('phase', 'Pricing')->count();
        $Rechazado = Project::where('phase', 'Rechazado')->count();



        return view('dashboard.reportes.index', compact('users','projects','Cotizado','Ganado','Lead','Negociacion','Pricing','Rechazado'));
    }

    public function getProjects(Request $request, $id)
    {

        if ($request->ajax()) {
            $client = Client::findOrFail($id);

            return response()->json([
                "projects" => $client->projects

            ]);
        }

        return null;
    }



}
