<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    //
    public function index(){
        $Materias =  Materia::All();
        return $Materias;
    }

    
    public function create(Request $req){

        $Materia = new Materia();
        $Materia->nome = $req->nome;
        $Materia->codigomateria = $req->codigomateria;
        $Status = $Materia->save();

        if($Status){
            return \response('materia salva', 201);
        }
    }
   
}
