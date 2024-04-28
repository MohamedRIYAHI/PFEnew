<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function formulaire()
    {
        return view('test');
    }
    public function fsjes()
    {
        return view('fsjes');
    }
}
