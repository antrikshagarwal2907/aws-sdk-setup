<?php

use Illuminate\Support\Facades\Route;
use Aws\S3\S3Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $s3 = new S3Client([
        'region' => 'us-east-2'  // Since version 3.277.10 of the SDK,
    ]);
    dd($s3);
// return view('welcome');
});
