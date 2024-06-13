<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counties = [
            'Baranya', 'Bács-Kiskun', 'Békés', 'Borsod-Abaúj-Zemplén',
            'Csongrád-Csanád', 'Fejér', 'Győr-Moson-Sopron', 'Hajdú-Bihar',
            'Heves', 'Jász-Nagykun-Szolnok', 'Komárom-Esztergom', 'Nógrád',
            'Pest', 'Somogy', 'Szabolcs-Szatmár-Bereg', 'Tolna',
            'Vas', 'Veszprém', 'Zala'
        ];

        foreach ($counties as $countyName) {
            DB::table('counties')->insert([
                'name' => $countyName,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
