<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Consultation;
use App\Models\Filiere;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
//        if the user is a candidat then show only his consultations
        if (auth()->user()->role == 'candidat') {
            if (!Candidat::where('user_id', auth()->user()->id)->exists()) {
                $consultations = Consultation::all();
                return view('consultations.index', compact('consultations'));
            }

            $candidat = Candidat::where('user_id', auth()->user()->id)->first();
            $consultations = Consultation::where('candidat_id', $candidat->id)->get();
            return view('consultations.index', compact('consultations'));
        }
//        if the user is a chef then show all consultations
        $consultations = Consultation::all();
        return view('consultations.index', compact('consultations'));
    }
    public function store(Request $request, $candidatId, $filiereName){
        $userID = $candidatId;
        $candidat = Candidat::where('user_id', $userID)->first();
        $filiere = Filiere::where('nom', $filiereName)->first();

        $validDiplomasForMaster = ['LICENCE', 'MASTER'];
        $filiereType = $filiere->type;




        if ($filiereType === 'master' && !in_array($candidat->dernier_diplome, $validDiplomasForMaster)) {
            return redirect()->route('consultations.index')->withErrors(['error' => 'You need to have one of the following diplomas to create a consultation for master: LICENCE, MASTER.']);
        }


        // Check if the user has already made a consultation for this filiere
        $existingConsultation = Consultation::where('candidat_id', $candidat->id)
            ->where('filiere_id', $filiere->id)
            ->first();
        if ($existingConsultation) {
            return redirect()->route('consultations.index')->withErrors(['error' => 'You have already made a consultation for this filiere.']);
        }

        // Check if the user has already made 3 consultations
        $consultationsCount = Consultation::where('candidat_id', $candidat->id)->count();
        if ($consultationsCount >= 3) {
            return redirect()->route('consultations.index')->withErrors(['error' => 'You have already made 3 consultations.']);
        }

        // Create and save the new consultation
        $consultation = new Consultation();
        $consultation->candidat_id = $candidat->id;
        $consultation->filiere_id = $filiere->id;
        $consultation->save();

        return redirect()->route('consultations.index');
    }


    public function valider(Consultation $consultation)
    {
        $consultation->verification = 'executer';
        $consultation->save();
        return redirect()->route('consultations.index');
    }

    public function rejeter(Consultation $consultation)
    {
        $consultation->verification = 'non executer';
        $consultation->save();
        return redirect()->route('consultations.index');
    }

    public function show(Consultation $consultation)
    {
        return view('consultations.show', compact('consultation'));
    }

    public function destroy(Consultation $consultation)
    {
        $consultation->delete();
        return redirect()->route('consultations.index');
    }
}
