<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function showPrecios(){
        $datos = DB::table('precio')
                ->get();
        return view('servicios/precios',['precio' => $datos]);
    }

    public function showHabitaciones(){
        $datos = DB::table('habitaciones')
                ->get();
        return view('servicios/habitaciones',['habitaciones' => $datos]);
    }
}
