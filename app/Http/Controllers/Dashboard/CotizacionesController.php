<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\Client;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CotizacionesController extends Controller
{
    public function index(){

        $clients =Client::all();
        $categories =Category::all();
        $projects =Project::all();
        return view('dashboard.cotizaciones.index', compact('clients', 'categories', 'projects'));
    }
    public function generate(){

        $clients =Client::all();
        $categories =Category::all();
        $projects =Project::all();
        return view('dashboard.cotizaciones.generate', compact('clients', 'categories', 'projects'));
    }

    public function add(){

        $projects =Project::all();
        return view('dashboard.cotizaciones.add', compact('projects'));
    }

    public function edit($id){

        $cotizacion = CotizacionesController::findOrFail($id);
        return view('dashboard.contacts.edit', compact('cotizacion'));


    }

    public function update(Request $request, $id)
    {
        $cotizacion = CotizacionesController::findOrFail($id);
        $cotizacion->fill($request->all());
        $cotizacion->update();


        $message = 'Cotizacion actualizada con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.cotizaciones.index');
    }

    public function store(Request $request) {
        dd($request->all());
    }
}
