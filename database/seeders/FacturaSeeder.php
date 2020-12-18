<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factura = [
            [
                'numero' => 1,
                'cliente' => 1,
                'formaPago' => 1,
                'entrada' => '2020-05-19',
                'salida' => '2020-05-22',
                'total' => '100000',
            ],
            [
                'numero' => 2,
                'cliente' => 2,
                'formaPago' => 2,
                'entrada' => '2020-05-20',
                'salida' => '2020-05-21',
                'total' => '80000',
            ],
            [
                'numero' => 3,
                'cliente' => 3,
                'formaPago' => 3,
                'entrada' => '2020-05-22',
                'salida' => '2020-05-24',
                'total' => '100000',
            ],
            [
                'numero' => 4,
                'cliente' => 4,
                'formaPago' => 2,
                'entrada' => '2020-05-23',
                'salida' => '2020-05-24',
                'total' => '50000',
            ],
            [
                'numero' => 5,
                'cliente' => 5,
                'formaPago' => 1,
                'entrada' => '2020-05-24',
                'salida' => '2020-05-27',
                'total' => '280000',
            ],
        ];
        DB::table('factura')->insert($factura);
    }
}
