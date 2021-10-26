<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function React\Promise\all;

class HomeController extends Controller
{
    public function index() {

        return view('home.index');
    }
}
