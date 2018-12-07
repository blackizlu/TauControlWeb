<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BitacoraController extends Controller
{
    public function index(){

        return view('dashboard.bitacora.index');
    }
}
