<?php

namespace Database\Seeders;

use App\Models\Kartier;
use Illuminate\Database\Seeder;

class secteursSeeder extends Seeder
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
               'nom'=>'Secteur 6',
               'arrondissement_id' => 1,
            ],
            [
               'nom'=>'Secteur 5',
               'arrondissement_id' => 1,
            ],//Fin arrondissement 1
            [
               'nom'=>'Secteur 7',
               'arrondissement_id' => 2,
            ],
        ];

        foreach ($userData as $key => $val) {
            Kartier::create($val);
        }
    }
}
