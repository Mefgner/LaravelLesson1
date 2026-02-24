<?php

use App\Http\Controllers\FibonacciController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;

Route::get('/fi', [FibonacciController::class, 'getForm']);
Route::post('/results', [FibonacciController::class, 'processForm']);

// Route::get('/fi', function (Request $request) {
//     return view('fi.form');
// });

// Route::post('/result', function(Request $request) { 
//     $n = $request->input('ficount');

//     if ($n <= 1) {
//         return $n;
//     }

//     $next = 0;
//     $a = 0;
//     $b = 1;

    
//     for ($i = 2; $i <= $n; $i++) {
//         $next = $a + $b;
//         $a = $b;
//         $b = $next;
//     }

//     $render_data = [
//         'finumber' => $b
//     ];

//     return view('fi.results', $render_data);
// });
