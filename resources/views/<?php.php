<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Cardiometabolicreport;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Response;
// use Dompdf\Dompdf;
// use Dompdf\Options;
// use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class ReportController extends Controller
{

    public function downloadPDF()
    {
        $data = Report::all();
        view()->share('data',$data);
        $pdf= PDF::loadView('pdf')
            ->setOptions(['dpi'=>150])
            ->setWarning(false);
        return $pdf->download('report.pdf');
}
    
    
}
