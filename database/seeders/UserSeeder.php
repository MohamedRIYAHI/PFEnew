<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nom' => 'MOUNIM',
                'nom_arabe' => 'mounim',
                'prenom' => 'MOHAMED',
                'prenom_arabe' => 'mohamed',
                'email' => 'mohamedmounim25@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'chef_filiere',
                'sexe' => 'homme',
                'photo' => 'Flag_of_Palestine.svg.png',
                'date_naissance' => '2002-07-12',
                'lieu_naissance' => 'Casablanca',
                'phone' => '0666666666',
                'cin' => 'EE666666',
            ],
            [
                'nom' => 'Youssef',
                'nom_arabe' => 'Youssef',
                'prenom' => 'Youssef',
                'prenom_arabe' => 'Youssef',
                'email' => 'yous.jemm@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'candidat',
                'sexe' => 'homme',
                'photo' => '13af2-morocco.png',
                'date_naissance' => '2006-12-12',
                'lieu_naissance' => 'Tanger',
                'phone' => '0666666666',
                'cin' => 'EE666666',
            ],
            [
                'nom' => 'abdo',
                'nom_arabe' => 'abdo',
                'prenom' => 'riyahi',
                'prenom_arabe' => 'riyahi',
                'email' => 'abdo.riyahi@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
                'sexe' => 'homme',
                'photo' => '6c737506872effa6caac3d6a20ba2b53.jpg',
                'date_naissance' => '2000-12-12',
                'lieu_naissance' => 'casblanca',
                'phone' => '0666666666',
                'cin' => 'EE666666',
            ],

        ];

        User::insert($data);

    }
}
