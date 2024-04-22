<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use PDF;

class PdfController extends Controller
{
    public function index()
    {
        $param_data = [
                    'penandatangan' => 'Nama Penandatangan'
                ];
        $pdf = PDF::chunkLoadView('<html-separator/>', 'pdf.template-pdf', $param_data, [], [
            'title'                     => "No Dokumen",
            'format'                    => 'Legal',
            'default_font_size'         => '12',
			'margin_left'               => 10,
			'margin_right'              => 10,
			'margin_top'                => 30,
			'margin_bottom'             => 10,
            'margin_footer'             => 5,
        ]);
        
        // open stream
        return $pdf->stream('dokumen.pdf');

        // to save to storage folder
        if (!file_exists(storage_path('app/public/pdf'))) {
            mkdir(storage_path('app/public/pdf'), 0777, true);
        }

        $fileName = 'pdf-'. time() . '.pdf'; 
        $pdf->save(storage_path("app/public/pdf/" . $fileName));
        return storage_path("app/public/pdf/" . $fileName);
    }
}
