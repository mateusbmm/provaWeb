<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\MateriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/listarAlunos', [AlunoController:: class, 'index'])-> name('listar-alunos');
Route::get('/criarAluno', [AlunoController:: class, 'create'])-> name('create-aluno');

Route::get('/listarMaterias', [MateriaController:: class, 'index'])-> name('listar-materias');
Route::get('/criarMateria', [MateriaController:: class, 'create'])-> name('create-materia');



