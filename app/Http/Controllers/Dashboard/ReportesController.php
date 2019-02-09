<?php

namespace App\Http\Controllers\dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    public function index(){

        $users = User::all();

        return view('dashboard.reportes.index', compact('users'));
    }

    public function getProjects(Request $request, $id)
    {
        if ($request->ajax()) {
            $user = User::findOrFail($id);

            $cotizado = 0;
            $ganado = 0;
            $lead = 0;
            $negociacion = 0;
            $pricing = 0;
            $Rechazado = 0;

            foreach ($user->projects as $project) {
                switch ($project->phase){
                    case 'Ganado':
                        $ganado++;
                        break;
                    case 'Lead':
                        $lead++;
                        break;
                    case 'Cotizado':
                        $cotizado++;
                        break;
                    case 'Negociacion':
                        $negociacion++;
                        break;
                    case 'Pricing':
                        $pricing++;
                        break;
                    case 'Rechazado':
                        $Rechazado++;
                        break;
                }
            }

            return response()->json([
                'projects' => [
                    'ganado' => $ganado,
                    'lead' => $lead,
                    'cotizado' => $cotizado,
                    'negociacion' => $negociacion,
                    'pricing' => $pricing,
                    'rechazado' => $Rechazado
                ]
            ]);
        }

        return null;
    }

    public function getBarchar(Request $request)
    {

        if ($request->ajax()) {

            $names = [];
            $cotizado = [];
            $ganado = [];
            $lead = [];
            $negociacion = [];
            $pricing = [];
            $Rechazado = [];

            foreach (User::all() as $user) {
                $ucotizado = 0;
                $uganado = 0;
                $ulead = 0;
                $unegociacion = 0;
                $upricing = 0;
                $uRechazado = 0;
                array_push($names, $user->name);

                foreach ($user->projects as $projects) {
                    switch ($projects->phase) {
                        case 'Ganado':
                            $uganado++;
                            break;
                        case 'Lead':
                            $ulead++;
                            break;
                        case 'Cotizado':
                            $ucotizado++;
                            break;
                        case 'Negociacion':
                            $unegociacion++;
                            break;
                        case 'Pricing':
                            $upricing++;
                            break;
                        case 'Rechazado':
                            $uRechazado++;
                            break;
                    }
                }

                array_push($cotizado, $ucotizado);
                array_push($ganado, $uganado);
                array_push($lead, $ulead);
                array_push($negociacion, $unegociacion);
                array_push($pricing, $upricing);
                array_push($Rechazado, $uRechazado);
            }



            return response()->json([
                'grafica' => [
                    'labels' => $names,
                    'ganado' => $ganado,
                    'lead' => $lead,
                    'cotizado' => $cotizado,
                    'negociacion' => $negociacion,
                    'pricing' => $pricing,
                    'rechazado' => $Rechazado
                ]
            ]);
        }

        return null;

    }

}