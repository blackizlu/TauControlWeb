<?php

namespace App\Http\Controllers\dashboard;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricesController extends Controller
{
    public function pdf($id)
    {
//        $order = ServiceOrder::find($id);
        $pdf = PDF::loadView('dashboard.pdf.invoice');
        return $pdf->stream('Invoice');
    }
}
