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
    public function add(){

        $clients =Client::all();
        $categories =Category::all();
        $projects =Project::all();
        return view('dashboard.cotizaciones.generate', compact('clients', 'categories', 'projects'));
    }

    public function store(Request $request) {
        dd($request->all());
    }
}
