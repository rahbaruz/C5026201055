<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showets() {
        return view('ets');
    }
    function showtugasphp() {
        return view('tugasphp');
    }
}
