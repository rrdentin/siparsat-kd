<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivateFileController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/arsip-surat/{filename}', [
    PrivateFileController::class, 'downloadSubmission'
])->name('private-file.downloadSurat');