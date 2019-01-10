<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\tipoActividad;
use App\tipoCliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoActividadController extends Controller
{
    public function index(){

        $tipoactividad = tipoActividad::all();

        return view('dashboard.categories.typeactivity', compact('tipoactividad'));
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'name' => 'required',
            'color' => 'required',
        ]);
        $tipoactividad = new tipoActividad($data);
        $tipoactividad->save();

        return redirect()->route('dashboard.tipoactividad.index');
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
