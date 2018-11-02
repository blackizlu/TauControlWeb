<?php

namespace App\Http\Controllers\dashboard;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CotizacionesController extends Controller
{
    public function index(){

        $clients =Client::all();
        return view('dashboard.cotizaciones.generate', compact('clients'));
    }

    public function view(){

        return view('dashboard.cotizaciones.categories');
    }

    public function store(Request $request) {
        dd($request->all());
    }
}
