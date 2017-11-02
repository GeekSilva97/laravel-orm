<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table = 'solicitacao';
    protected $primaryKey = 'id_solicitacao';

    public function setor(){
    	return $this->hasOne('App\Setor', 'id_setor', 'id_setor');
    }
}
