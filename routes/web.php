<?php

use App\Http\Controllers\ViewContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewContoller::class, "show"]);
