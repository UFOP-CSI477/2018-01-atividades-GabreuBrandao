<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [ 'nome', 'sigla' ];

    //1-ESTADO -> N-CIDADES
    public function cidades(){
    	return $this->hasMany('App\Cidade');
    }
}
