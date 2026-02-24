<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function getForm(Request $request) {
        return view('fi.form');
    }

    public function processForm(Request $request) {
        $n = $request->input('ficount');

        if ($n <= 1) {
            return $n;
        }

        $next = 0;
        $a = 0;
        $b = 1;

        $result = [0, 1];
        
        for ($i = 2; $i <= $n; $i++) {
            $next = $a + $b;
            $result[] = $next;
            $a = $b;
            $b = $next;
        }

        $render_data = [
            'finumbers' => $result,
        ];

        return view('fi.results', $render_data);
        }
}
