<?php

namespace App\Http\Controllers\Dashboard;

use App\Bitacora;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BitacoraController extends Controller
{
    public function index(){

        $registros = Bitacora::all();

        return view('dashboard.bitacora.index', compact('registros'));
    }
}
