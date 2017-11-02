<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;
use App\Models\Processo;

class Reu extends Model
{
    protected $table = 'reu';
    protected $primaryKey = 'id_reu';

    public function pessoa(){
      return $this->hasOne(Pessoa::class, 'id_pessoa', 'id_pessoa');
    }

    public function processos(){
      return $this->belongsTo(Processo::class, 'id_processo', 'id_processo');
    }
}
