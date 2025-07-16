<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Can;
use Spatie\Browsershot\Browsershot;

class CvController extends Controller
{
    public function index()
    {
        $data = Cache::get('data');
        if (!$data) {
            $json = file_get_contents(public_path('storage/cv_data.json'));
            $data = json_decode($json, true);
            Cache::put('data',$data,60);
        }
        return view('index', get_defined_vars());
    }

    public function generatePDF()
    {
        $data = Cache::get('data');
        if (!$data) {
            $json = Storage::disk('public')->get('cv_data.json');
            $data = json_decode($json, true);
            Cache::put('data',$data,60);
        }

        $template = view('index',['data' => $data])->render();

        $pdfContent = Browsershot::html($template)
        ->format('A4')
        ->margins(10,10,10,10)
        ->pdf();

        return response($pdfContent, 200)
        ->header('Content-Type', 'application/pdf')
        ->header('Content-Disposition', 'inline; filename="' . $data['name'] . '.pdf"');
    }
}
