<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::post('upload-img', [ImageController::class, 'uploadImg']);
