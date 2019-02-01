<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\Client;
use App\cotizaciones;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CotizacionesController extends Controller
{
    public function index(){

        $cotizaciones = cotizaciones::all();

        return view('dashboard.cotizaciones.index', compact('cotizaciones'));
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

    public function store(Request $request)//Cotizaciones externas
    {
        $data = request()->all();

        $this->validate($request, [
            'project_id' => 'required',
            'currency' => 'required',
            'amount' => 'required',
            'request' => 'required',

        ]);

        $cotizacion = new cotizaciones ($data);
        $cotizacion->sold = $request->has('sold') ? 1 : 0;
        $cotizacion->save();



        $message = 'Cotización creada con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.cotizaciones.index');
    }

    public function edit($id){

        $cotizacion = cotizaciones::findOrFail($id);
        $projects = Project::all();
        return view('dashboard.cotizaciones.edit', compact('cotizacion','projects'));


    }

    public function update(Request $request, $id)
    {
        $cotizacion = cotizaciones::findOrFail($id);
        $cotizacion->fill($request->all());
        $cotizacion->update();


        $message = 'Cotizacion actualizada con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.cotizaciones.index');
    }

    public function view($id)
    {
        $cotizacion = cotizaciones::findOrFail($id);
        $project = Project::all();


        return view('dashboard.cotizaciones.view', compact('cotizacion','project'));
    }

    public function download() {
        $downloads=DB::table('cotizacion')->get();
        return view('dashboard.cotizaciones.view', compact('downloads'));
    }

    public function destroy( $id){
        $cotizacion = cotizaciones::findOrFail($id);

/*        Storage::delete('cotizacion/'. $fileName);*/

        $cotizacion->delete();

        return response()->json([
            'success' => true
        ]);
    }

}
