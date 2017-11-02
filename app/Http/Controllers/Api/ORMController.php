<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Processo;
use App\Models\Pessoa;
use App\Models\Autor;
use App\Models\Reu;


class ORMController extends Controller
{
    public function show(){
      $processos = Processo::all();
      return view('orm', compact('processos'));
    }
}
