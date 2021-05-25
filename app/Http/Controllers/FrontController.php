<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class FrontController extends Controller
{
    //
    public function register()
    {
        $places = Place::with('classrooms')->get()->tojson();
        return view('auth.register',compact('places'));
    }
}
