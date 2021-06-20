<?php

namespace Database\Seeders;

use App\Models\Arrondissement;
use Illuminate\Database\Seeder;

class ArrondissementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrondiData = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '12',
        ];

        foreach ($arrondiData as $key => $val) {
            Arrondissement::create([
                'nom' => $val,
            ]);
        }
    }
}
