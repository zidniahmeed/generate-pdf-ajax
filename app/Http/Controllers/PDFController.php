<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function generatePDF()
    {
        $pdf = PDF::loadView('generate_pdf');

        $fileName =  time().'.'. 'pdf' ;
        $pdf->save(public_path() . '/' . $fileName);

        $pdf = public_path($fileName);
        return response()->download($pdf);
    }
}
