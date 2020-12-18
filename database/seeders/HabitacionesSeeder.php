<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
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
                'descripcion' => 'La habitación individual responde a tus necesidades. 
                                Tendrás el espacio suficiente que necesitas descansar 
                                durante tus viajes profesionales o de ocio',
                'numCamas' => 1,
                'foto' => '6.jpg',
                'precio' => 1,
            ],
            [
                'descripcion' => 'La habitación doble es más grande y de capacidad superior. 
                                En este tipo de habitaciones dispuestas para dos personas 
                                puede haber dos camas independientes',
                'numCamas' => 2,
                'foto' => '7.jpg',
                'precio' => 2,
            ],
            [
                'descripcion' => 'Las habitaciones familiares para todos aquellos que planeen
                                 sus vacaciones con toda la familia. Esta opción es ideal para 
                                 disfrutar de la comodidad de un hotel junto con toda la familia',
                'numCamas' => 4,
                'foto' => '8.jpg',
                'precio' => 3,
            ],
            [
                'descripcion' => 'La habitación de matrimonio, y tal y como su nombre indica, 
                                está preparada para hospedar a una pareja o matrimonio',
                'numCamas' => 1,
                'foto' => '9.jpg',
                'precio' => 4,
            ], 
            [
                'descripcion' => 'La suite es conocida por ser una habitación más lujosa. 
                                Existen diferentes tipos de suites dependiendo de su uso. 
                                De ese modo, la más completa de todas las habitaciones del 
                                hotel recibe el nombre de suite presidencial',
                'numCamas' => 1,
                'foto' => '10.jpg',
                'precio' => 5,
            ], 
        ];
        DB::table('habitaciones')->insert($datos);
    }
}
