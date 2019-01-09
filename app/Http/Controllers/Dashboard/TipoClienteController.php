<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\tipoCliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoClienteController extends Controller
{
    public function view(){
        $categories = Category::all(); /*Variable users muestra los usuarios en lista*/
        $tipocliente = tipoCliente::all(); /*Variable users muestra los usuarios en lista*/

        return view('dashboard.cotizaciones.categories', compact('categories','tipocliente'));
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'name' => 'required',
        ]);
        $tipocliente = new tipoCliente($data);
        $tipocliente->save();

        return redirect()->route('dashboard.cotizaciones.categories');
    }

    public function update(Request $request, $id)
    {
        $tipocliente = tipoCliente::findOrFail($id);
        $tipocliente->fill($request->all());
        $tipocliente->update();

        return redirect()->back();
    }

    public function destroy($id){
        $tipocliente = tipoCliente::findOrFail($id);
        $tipocliente->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
