<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function showClientes(){
        $datos = DB::table('cliente')
                ->get();
        return view('clientes/visualizar',['clientes' => $datos]);
    }
}
