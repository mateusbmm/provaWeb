<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    //

    public function index(){
        $alunos = Aluno::All();
        return $alunos;
    }

    public function create(Request $req){

        $Aluno = new Aluno();
        $Aluno->nome = $req->nome;
        $Aluno->matricula = $req->matricula;
        $status = $Aluno->save();

        if($status){
            return \response('gravado', 201);   
        }
    }
}
