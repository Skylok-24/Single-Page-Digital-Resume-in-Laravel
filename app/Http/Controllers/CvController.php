<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Can;

class CvController extends Controller
{
    public function index()
    {
        $data = Cache::get('data');
        if (!$data) {
            $json = Storage::disk('public')->get('cv_data.json');
            $data = json_decode($json, true);
            Cache::put('data',$data,60);
        }
        return view('index', get_defined_vars());
    }
}
