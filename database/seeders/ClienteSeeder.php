<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = [
            [
                'dni' => '1111',
                'nombre' => 'Juan Perez',
                'genero' => 'M',
                'domicilio' => 'B/ Puenes',
                'telefono' => '3137894561',
                'foto' => '11.jpg',
            ],
            [
                'dni' => '2222',
                'nombre' => 'Alberto Ruano',
                'genero' => 'M',
                'domicilio' => 'B/ Obrero',
                'telefono' => '3159782653',
                'foto' => '12.jpg',
            ],
            [
                'dni' => '3333',
                'nombre' => 'Ana Marin',
                'genero' => 'F',
                'domicilio' => 'B/ Altamira',
                'telefono' => '3157896324',
                'foto' => '13.jpg',
            ],
            [
                'dni' => '4444',
                'nombre' => 'Luisa Segovia',
                'genero' => 'F',
                'domicilio' => 'B/ La Floresta',
                'telefono' => '3115649512',
                'foto' => '14.jpg',
            ],
            [
                'dni' => '5555',
                'nombre' => 'David Mueses',
                'genero' => 'M',
                'domicilio' => 'B/ San Francisco',
                'telefono' => '3137704914',
                'foto' => '15.jpg',
            ],
        ];
        DB::table('cliente')->insert($clientes);
    }
}
