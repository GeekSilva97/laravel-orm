<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Pessoa;
use App\Models\Processo;

class Autor extends Model
{
    protected $table = 'autor';
    protected $primaryKey = 'id_autor';

    public function pessoa(){
      return $this->hasOne(Pessoa::class, 'id_pessoa', 'id_pessoa');
    }

    public function processos(){
      return $this->hasMany(Processo::class, 'id_processo', 'id_processo');
    }


}
