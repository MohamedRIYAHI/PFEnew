<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function dashboard(){
//        list all the consultations that are not yet validated count them
        $notValidated = Consultation::where('verification', 'en cours')->count();
        $validated = Consultation::where('verification', 'executer')->count();
        $rejected = Consultation::where('verification', 'non executer')->count();

        return view('chefs.dashboard', compact('notValidated', 'validated', 'rejected'));
    }
}
