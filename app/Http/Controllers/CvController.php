<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function index() 
    {
        $json = Storage::disk('public')->get('cv_data.json');
    
        $data = json_decode($json,true);
        return view('index',get_defined_vars());
    }
}
