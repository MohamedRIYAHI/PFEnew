<?php

namespace Database\Seeders;

use App\Models\Chef;
use Illuminate\Database\Seeder;

class ChefFiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
            [
                'user_id' => '1',
                'filiere_id' => '3',

            ];

        Chef::insert($data);

    }
}
