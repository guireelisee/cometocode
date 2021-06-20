<?php

namespace Database\Seeders;

use App\Models\Societe;
use Illuminate\Database\Seeder;

class SocietesSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $userData = [
            [
                'nom'=>'Entreprise 1',
                'description'=>'Description de l\'entreprise 1',
            ],
            [
                'nom'=>'Entreprise 2',
                'description'=>'Description de l\'entreprise 2',
            ],
            [
                'nom'=>'Entreprise 3',
                'description'=>'Description de l\'entreprise 3',
            ],
            [
                'nom'=>'Entreprise 4',
                'description'=>'Description de l\'entreprise 4',
            ],
            [
                'nom'=>'Entreprise 5',
                'description'=>'Description de l\'entreprise 5',
            ],
        ];

        foreach ($userData as $key => $val) {
            Societe::create($val);
        }
    }
}
