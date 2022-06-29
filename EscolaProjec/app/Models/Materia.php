<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $filable = ['nome', 'codigomateria'];


    /*
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }*/
}
