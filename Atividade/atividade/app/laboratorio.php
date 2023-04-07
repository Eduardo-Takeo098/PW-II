<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratorio extends Model
{
     //colocar o nome da tabela do banco
     protected $table = "tblab";

     //campos da minha tabela
     protected $fillable = ['idLab','Lab'];
 
     public $timestamps=false;
}
