<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generate()
    {
        $array['data'] = Name::get();
        $fileName = 'application.pdf';

        //dd($array);

        //$html = \view('pdf.demo')->with('data', $array);
        $html = \Illuminate\Support\Facades\View::make('pdf.demo', $array);
        $view = $html->render();

        //dd($view);

        $mpdf = null;

        //$current_time = Carbon::now();

        $mpdf = new \Mpdf\Mpdf(/* ['format' => 'A4-L'] */);

        $mpdf->setFooter('PDF by Shakib Project');
        $stylesheet = file_get_contents('css/mpdf.css');

        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($view);
        $mpdf->Output($fileName, 'I');
    }
}
