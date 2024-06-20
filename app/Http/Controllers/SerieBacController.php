<?php

namespace App\Http\Controllers;

use App\Models\SerieBac;
use Illuminate\Http\Request;

class SerieBacController extends Controller
{
    public function index () {
        $seriebacs = SerieBac::all();

        return view('/test2')->with('seriebacs',$seriebacs);
    }
}
