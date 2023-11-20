<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use PDF;

class InvoiceController extends Controller
{
    public function generatePDF(Request $request)
    {
        $htmlContent = $request->input('htmlContent');

        $pdf = PDF::loadHTML($htmlContent);
        return $pdf->download('invoice.pdf');
    }
}
