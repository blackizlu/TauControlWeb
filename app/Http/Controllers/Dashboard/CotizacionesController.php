<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CotizacionesController extends Controller
{
    public function index(){

        $clients =Client::all();
        $categories =Category::all();
        return view('dashboard.cotizaciones.generate', compact('clients', 'categories'));
    }

    public function store(Request $request) {
        dd($request->all());
    }
}
