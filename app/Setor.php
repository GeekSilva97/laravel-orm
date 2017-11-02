<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setor';
    protected $primaryKey = 'id_setor';
    public $timestamps = false;

    public function servico(){
    	return $this->belongsTo('App\Servico', 'id_setor', 'id_setor');
    }

}
