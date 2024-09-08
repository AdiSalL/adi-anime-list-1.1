<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ViewContoller extends Controller
{
    //
    public function show() {
        $response = Http::get();
    }
}
