<?php

namespace Database\Seeders;

use App\Models\Centre;
use Illuminate\Database\Seeder;

class CentresSeeder extends Seeder
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
                'nom'=>'Centre 1',
                'description'=>'Description du centre 1',
                'kartier_id'=>'5',
                'latitude'=>'1.1',
                'longitude'=>'1.2',
            ],
            [
                'nom'=>'Centre 2',
                'description'=>'Description du centre 2',
                'kartier_id'=>'4',
                'latitude'=>'2.1',
                'longitude'=>'2.2',
            ],
            [
                'nom'=>'Centre 3',
                'description'=>'Description du centre 3',
                'kartier_id'=>'3',
                'latitude'=>'3.1',
                'longitude'=>'3.2',
            ],
            [
                'nom'=>'Centre 4',
                'description'=>'Description du centre 4',
                'kartier_id'=>'2',
                'latitude'=>'4.1',
                'longitude'=>'4.2',
            ],
            [
                'nom'=>'Centre 5',
                'description'=>'Description du centre 5',
                'kartier_id'=>'1',
                'latitude'=>'5.1',
                'longitude'=>'5.2',
            ],
        ];

        foreach ($userData as $key => $val) {
            Centre::create($val);
        }
    }
}
