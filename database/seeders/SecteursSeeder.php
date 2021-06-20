<?php

namespace Database\Seeders;

use App\Models\Kartier;
use Illuminate\Database\Seeder;

class SecteursSeeder extends Seeder
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
            [
                'nom'=>'Secteur 10',
                'arrondissement_id' => 2,
            ],
            [
                'nom'=>'Secteur 11',
                'arrondissement_id' => 2,
            ],

            [
                'nom'=>'Secteur 12',
                'arrondissement_id' => 3,
            ],
            [
                'nom'=>'Secteur 14',
                'arrondissement_id' => 3,
            ],
            [
                'nom'=>'Secteur 15',
                'arrondissement_id' => 3,
            ],
            [
                'nom'=>'Secteur 16',
                'arrondissement_id' => 3,
            ],

            [
                'nom'=>'Secteur 17',
                'arrondissement_id' => 4,
            ],
            [
                'nom'=>'Secteur 18',
                'arrondissement_id' => 4,
            ],
            [
                'nom'=>'Secteur 19',
                'arrondissement_id' => 4,
            ],

            [
                'nom'=>'Secteur 21',
                'arrondissement_id' => 5,
            ],
            [
                'nom'=>'Secteur 22',
                'arrondissement_id' => 5,
            ],
            [
                'nom'=>'Secteur 23',
                'arrondissement_id' => 5,
            ],
            [
                'nom'=>'Secteur 24',
                'arrondissement_id' => 5,
            ],

            [
                'nom'=>'Secteur 25',
                'arrondissement_id' => 6,
            ],
            [
                'nom'=>'Secteur 26',
                'arrondissement_id' => 6,
            ],
            [
                'nom'=>'Secteur 28',
                'arrondissement_id' => 6,
            ],
            [
                'nom'=>'Secteur 29',
                'arrondissement_id' => 6,
            ],

            [
                'nom'=>'Secteur 30',
                'arrondissement_id' => 7,
            ],
            [
                'nom'=>'Secteur 31',
                'arrondissement_id' => 7,
            ],
            [
                'nom'=>'Secteur 32',
                'arrondissement_id' => 7,
            ],

            [
                'nom'=>'Secteur 34',
                'arrondissement_id' => 8,
            ],
            [
                'nom'=>'Secteur 35',
                'arrondissement_id' => 8,
            ],

            [
                'nom'=>'Secteur 36',
                'arrondissement_id' => 9,
            ],
            [
                'nom'=>'Secteur 38',
                'arrondissement_id' => 9,
            ],

            [
                'nom'=>'Secteur 42',
                'arrondissement_id' => 10,
            ],
            [
                'nom'=>'Secteur 43',
                'arrondissement_id' => 10,
            ],
            [
                'nom'=>'Secteur 44',
                'arrondissement_id' => 10,
            ],

            [
                'nom'=>'Secteur 46',
                'arrondissement_id' => 11,
            ],
            [
                'nom'=>'Secteur 47',
                'arrondissement_id' => 11,
            ],
            [
                'nom'=>'Secteur 50',
                'arrondissement_id' => 11,
            ],
            [
                'nom'=>'Secteur 51',
                'arrondissement_id' => 11,
            ],

            [
                'nom'=>'Secteur 52',
                'arrondissement_id' => 12,
            ],
            [
                'nom'=>'Secteur 53',
                'arrondissement_id' => 12,
            ],
            [
                'nom'=>'Secteur 54',
                'arrondissement_id' => 12,
            ],
            [
                'nom'=>'Secteur 55',
                'arrondissement_id' => 12,
            ],
        ];

        foreach ($userData as $key => $val) {
            Kartier::create($val);
        }
    }
}
