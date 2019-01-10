<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\tipoCliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoClienteController extends Controller
{
    public function index()
    {
        $tipocliente = tipoCliente::all();

        return view('dashboard.Categories.typeclient', compact('tipocliente'));
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'name' => 'required',
        ]);
        $tipocliente = new tipoCliente($data);
        $tipocliente->save();

        return redirect()->route('dashboard.tipocliente.index');
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
