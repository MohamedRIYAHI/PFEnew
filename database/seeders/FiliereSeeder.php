<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nom' => 'Informatique Médicale (IM)',
                'description' => 'Pr. Said JAI ANDALOUSSI',
                'type' => 'licence',
            ],
            [
                'nom' => 'Energies Solaire et Eolienne (ESE)',
                'description' => 'Pr. Mohamed ABID',
                'type' => 'licence',
            ],
            [
                'nom' => 'Génie Agroalimentaire (GA)',
                'description' => 'Pr. Mohamed DAKIR',
                'type' => 'licence',
            ],
            [
                'nom' => 'Génie Climatique (GC)',
                'description' => 'Pr. Rabha KHATYR',
                'type' => 'licence',
            ],
            [
                'nom' => 'Gestion et Assainissement Liquide du Milieu Urbain (GALMU)',
                'description' => 'Pr. M. TAHIRI',
                'type' => 'licence',
            ],
            [
                'nom' => 'Modélisation-Statistique-Informatique (MSI)',
                'description' => 'Pr. Atika RADID',
                'type' => 'licence',
            ],
            [
                'nom' => 'Électronique, Électrotechnique, Automatique et Informatique industrielle (EAI)',
                'description' => 'Pr. R. MARRAKH',
                'type' => 'licence',
            ],
            [
                'nom' => 'Technologie et Management du Bâtiment et des Travaux Publics (TMBTP)',
                'description' => 'Pr. Faouzi LAKRAD	',
                'type' => 'licence',
            ],
            [
                'nom' => 'Bio-Analyses Médicales (BAM)',
                'description' => 'Pr. A. SOUKRI	',
                'type' => 'licence',
            ],
            [
                'nom' => 'Génie Logistique (GL)',
                'description' => 'Pr. Bahloul BENSASSI',
                'type' => 'master',
            ],
            [
                'nom' => 'Electronique, Electrotechnique, Automatique et Informatique Industrielle (EEAII)',
                'description' => 'Pr. Bahloul BENSASSI',
                'type' => 'master',
            ],
            [
                'nom' => 'Science des Données Génie Logiciel et Réseaux (SDGLR)',
                'description' => 'Pr.ERRAISS Mohammed',
                'type' => 'master',
            ],
            [
                'nom' => 'Big Data Cloud Computing (BD2C)',
                'description' => 'Pr. Khalid MOUSSAID',
                'type' => 'master',
            ],
            [
                'nom' => 'Energies Renouvelables et Systèmes Energétiques (ERSE)',
                'description' => 'Pr. Dennoun SAIFAOUI',
                'type' => 'master',
            ],
            [
                'nom' => 'Modelisation et Simulation en Mécanique (MSM)',
                'description' => 'Pr. Rachid SEHAQUI',
                'type' => 'master',
            ],
            [
                'nom' => 'Système d’Information Géographique et Gestion du Territoire (SIGGT)',
                'description' => 'Pr. Hassan RHINANE',
                'type' => 'master',
            ],

        ];

        Filiere::insert($data);

    }
}
