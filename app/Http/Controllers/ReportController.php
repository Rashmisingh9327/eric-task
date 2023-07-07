<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Cardiometabolicreport;
use Dompdf\Dompdf;
use PDF;
use Illuminate\Http\Request;
use Dompdf\Options;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Html;


class ReportController extends Controller
{
    public function downloadPDF($id)
{
    $data = Report::where('id',$id)->get();
        view()->share('data',$data);
        $pdf= PDF::loadView('pdf');
        $pdf->setOptions(['warnings' => false,
        'orientation' => 'portrait']);
        $filename = 'report_' . time() . '.pdf';
        return $pdf->download($filename);
}



    private function generatePdfContent($report)
    {
        // Create the HTML content for the PDF using the report data
        $htmlContent = view('pdf', compact('report'))->render();

        return $htmlContent;
    }

    public function downloadPDF1($id)
    {
        // Fetch all data from the report table
        $cardiometabolicreport = Cardiometabolicreport::with(['patient'])->where('id',$id)->get();
        // dd($id);

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        // Generate the PDF content
        $html = view('pdf1', compact('cardiometabolicreport'))->render();
        // Create a new Dompdf instance
        $dompdf = new Dompdf($options);

        // Load the HTML content
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Generate a unique filename for the PDF
        $filename = 'cardiometabolicreport_report_' . time() . '.pdf';

        // Store the PDF file on the server
        $dompdf->stream($filename, [
            'Attachment' => true
        ]);
    }

    private function generatePdfContent1($cardiometabolicreport)
    {
        // Create the HTML content for the PDF using the report data
        $htmlContent = view('pdf1', compact('cardiometabolicreport'))->render();

        return $htmlContent;
    }
}
