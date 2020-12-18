<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'id' => 1,
                'tipo' => 'Individual',
                'precio' => 25000,
            ],
            [
                'id' => 2,
                'tipo' => 'Doble',
                'precio' => 40000,
            ],
            [
                'id' => 3,
                'tipo' => 'Familiar',
                'precio' => 50000,
            ],
            [
                'id' => 4,
                'tipo' => 'Matrimonio',
                'precio' => 50000,
            ], 
            [
                'id' => 5,
                'tipo' => 'Suite',
                'precio' => 70000,
            ], 
        ];
        DB::table('precio')->insert($datos);
    }
}
