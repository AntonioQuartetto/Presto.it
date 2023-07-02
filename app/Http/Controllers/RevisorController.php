<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function create(){

        return view('revisor.create');
    }
}
