<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Autor;
use App\Models\Reu;

class Processo extends Model
{

    protected $table = 'processo';
    protected $primaryKey = 'id_processo';

    public function autores(){
      return $this->hasMany(Autor::class, 'id_processo', 'id_processo');
    }
    public function reus(){
      return $this->hasMany(Reu::class, 'id_processo', 'id_processo');
    }
}
