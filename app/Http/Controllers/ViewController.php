<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setor;
use App\Solicitacao;

class ViewController extends Controller
{
    
	public function teste(){

		$solicitacao = Solicitacao::all();
		$solicitacoes = [];
		foreach($solicitacao as $s){
			$s->setor;
			$solicitacoes[] = $s;
		}
		
		return $solicitacoes;
	}

}
