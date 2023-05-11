<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebProjectController extends Controller
{
    public function index(){
    return view('web-project.index');
    }
}
