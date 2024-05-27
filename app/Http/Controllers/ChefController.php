<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Filiere;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Consultation;


class ChefController extends Controller
{
    public function dashboard()
    {
        // List all the consultations that are not yet validated and count them
        $notValidated = Consultation::where('verification', 'en cours')->count();
        $validated = Consultation::where('verification', 'executer')->count();
        $rejected = Consultation::where('verification', 'non executer')->count();

        return view('chefs.dashboard', compact('notValidated', 'validated', 'rejected'));
    }

    public function index()
    {
        $chefs = Chef::all();
        $filieres = Filiere::all();
        return view('chefs.index', compact('chefs', 'filieres'));
    }

    public function create()
    {
        $filieres = Filiere::all();
        return view('chefs.create', compact('filieres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'filiere_id' => 'required|exists:filieres,id',
        ]);

        try {
            // Create a new user
            $user = new User();
            $user->nom = $request->input('nom');
            $user->prenom = $request->input('prenom');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->role ="chef_filiere";
            $user->save();

            // Create a new chef
            $chef = new Chef();
            $chef->user_id = $user->id;
            $chef->filiere_id = $request->input('filiere_id');
            $chef->save();

            return redirect()->route('chefs.index')->with('success', 'Chef and user account created successfully!');
        } catch (\Exception $e) {
            return redirect()->route('chefs.index')->with('error', 'An error occurred while creating the chef and user account.');
        }
    }
}
