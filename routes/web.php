<?php

use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CvController::class,'index']);
Route::get('/save-pdf',[CvController::class,'generatePDF'])->name('generate');