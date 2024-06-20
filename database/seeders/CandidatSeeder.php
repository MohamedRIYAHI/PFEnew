<?php

namespace Database\Seeders;

use App\Models\Candidat;
use Illuminate\Database\Seeder;

class CandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
            [
                'user_id' => '2',
                'serie_bac' => 'BAC SCIENCES ÉCONOMIQUES',
                'montion_bac' => 'BIEN',
                'annee_bac' => '2019',
                'nom_etab' => 'ENSA',
                'status' => 'Etudiant',
                'moyenne_bac' => '15.5',
                'dernier_diplome' => 'DUT',
                'annee_diplome' => '2019',
                'specialite' => 'Gestion',
                'cv' => 'cv.pdf',
                'lettre_motivation' => 'lettre.pdf',
                'file_derneier_diplome' => 'diplome.pdf',
                'carteNT' => 'carteNT.pdf',
                'releve_note' => 'releve_note.pdf',

            ];

        Candidat::insert($data);

    }
}
