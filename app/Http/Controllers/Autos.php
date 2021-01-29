<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Autos extends Controller
{
    public function inner(Request $request){
        $usuarios = DB::table('usuarios')
        ->join('autos', 'usuarios.id', 'autos.dueno')
        ->get();
        return $usuarios;
    }

    public function left(Request $request){
        $usuarios = DB::table('usuarios')
        ->leftjoin('autos', 'usuarios.id', 'autos.dueno')
        
        ->get();
        return $usuarios;
    }

    public function right(Request $request){
        $usuarios = DB::table('usuarios')
        ->rightjoin('autos', 'usuarios.id', 'autos.dueno')
        ->get();
        return $usuarios;
    }

}