<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alumnos extends Controller
{
    public function lista(){
        return [["nombre"=>"Rodrigo Urtecho Quintal", "matricula"=>"16003872"],
        ["nombre"=>"Arath Torres Montero", "matricula"=>"A16008210"], 
        ["nombre"=>"Sofia Dolores Montes de Oca Quintana", "matricula"=>"19210045"]];
    }

    public function callLista(){
        $this->lista();
    }
}


