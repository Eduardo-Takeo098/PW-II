<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reclamacao extends Model
{
     //colocar o nome da tabela do banco
     protected $table = "tbreclamacao";

     //campos da minha tabela
     protected $fillable = ['idRec','pc','titulo','descricao','dtCriacao'];
 
     public $timestamps=false;
    
}
