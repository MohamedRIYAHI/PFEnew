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
                'nom' => 'Youssef',
                'nom_arabe' => 'Youssef',
                'prenom' => 'Youssef',
                'prenom_arabe' => 'Youssef',
                'email' => 'yous.jemm3@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'chef_filiere',
                'sexe' => 'homme',
                'photo' => 'p.jpg',
                'date_naissance' => '1999-12-12',
                'lieu_naissance' => 'Tanger',
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
                'photo' => 'p.jpg',
                'date_naissance' => '1999-12-12',
                'lieu_naissance' => 'Tanger',
                'phone' => '0666666666',
                'cin' => 'EE666666',
            ],


        ];

        User::insert($data);

    }
}
