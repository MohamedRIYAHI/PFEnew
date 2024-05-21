<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;


use app\Http\Controllers\MessagerieController;
use App\Models\SerieBac;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function test()
    {
        return view('test');
    }
    public function test1()
    {
        return view('test1');
    }

    public function index()
    {
            return view('index');
           
    }
    public function test2()
    {
        $seriebacs=["BAC SCIENCES ÉCONOMIQUES",  "BAC TECHNIQUES DE GESTION ET COMPTABILITÉ",   "BAC TECHNIQUES DE GESTION ADMINISTRATIVE", "BAC SCIENCES DE VIE ET DE TERRE",  "BAC LITTERAIRE",  "BAC SCIENCES HUMAINES", "BAC SCIENCES MATHÉMATIQUES A", "BAC SCIENCES MATHÉMATIQUES B", "BAC SCIENCES PHYSIQUES CHIMIE", "BAC SCIENCES ET TECHNOLOGIES ÉLECTRIQUES", "BAC SCIENCES ET TECHNOLOGIES MÉCANIQUES",  "BAC ETRANGER (MISSION)"];
        return view('test2',['seriebacs'=>$seriebacs]);
     
    }
    public function fsjes()
    {
        return view('fsjes');
    }



    
}
