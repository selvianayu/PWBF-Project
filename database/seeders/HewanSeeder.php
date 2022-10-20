<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hewans')->insert([
            'name' => 'Boby',
            'breed' => 'Dom',
            'colour' => 'yellow',
            'age' => 'young',
            'weight' => 5,
            'sex' => true,
            'kategoris_id' => 1
        ]);

        DB::table('hewans')->insert([
            'name' => 'Meirza',
            'breed' => 'cantik',
            'colour' => 'yellow',
            'age' => 'young',
            'weight' => 5,
            'sex' => true,
            'kategoris_id' => 1
        ]);
    }
}
