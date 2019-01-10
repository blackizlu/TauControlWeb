<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\tipoActividad;
use App\tipoCliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoActividadController extends Controller
{
    public function view(){
        $categories = Category::all(); /*Variable users muestra los usuarios en lista*/
        $tipocliente = tipoCliente::all(); /*Variable users muestra los usuarios en lista*/
        $tipoactividad = tipoActividad::all();

        return view('dashboard.cotizaciones.categories', compact('categories','tipocliente','tipoactividad'));
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'name' => 'required',
        ]);
        $tipoactividad = new tipoActividad($data);
        $tipoactividad->save();

        return redirect()->route('dashboard.cotizaciones.categories');
    }

    public function update(Request $request, $id)
    {
        $tipoactividad = tipoActividad::findOrFail($id);
        $tipoactividad->fill($request->all());
        $tipoactividad->update();

        return redirect()->back();
    }

    public function destroy($id){
        $tipoactividad = tipoActividad::findOrFail($id);
        $tipoactividad->delete();

        return response()->json([
            'success' => true
        ]);
    }
}