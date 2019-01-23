<?php

namespace App\Http\Controllers\dashboard;

use App\cotizaciones;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    public function index(){

        $users = User::all();
        $projects = Project::all();

        //Contara el total de proyectos para las tarjetas en Reportes
        $Cotizado = Project::where('phase', 'Cotizado')->count();
        $Ganado = Project::where('phase', 'Ganado')->count();
        $Negociacion = Project::where('phase', 'Negociacion')->count();
        $Lead = Project::where('phase', 'Lead')->count();
        $Pricing = Project::where('phase', 'Pricing')->count();
        $Rechazado = Project::where('phase', 'Rechazado')->count();

        $totalmx = DB::table('cotizacion')
            ->where('currency','MXN')
            ->sum('amount');

        $totalUS = DB::table('cotizacion')
            ->where('currency','USD')
            ->sum('amount');

//        $totalGanMXN = DB::table('cotizacion')
//            ->join('projects', 'projects.phase', '=', 'Ganado')
//            ->where('currency','MXN')
//            ->sum('amount');
//
//        dd($totalGanMXN);

        return view('dashboard.reportes.index', compact('users','projects','Cotizado','Ganado','Lead','Negociacion','Pricing','Rechazado','totalmx','totalUS','totalGanMXN' ));
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
