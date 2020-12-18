<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function showHabitaciones(){
        $datos = DB::table('precio')
                ->get();
        return view('servicios/habitaciones',['precio' => $datos]);
    }
}
