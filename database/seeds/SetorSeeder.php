<?php

use Illuminate\Database\Seeder;
use App\Setor;

class SetorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$setores = [
    		'Setor de Produção',
    		'Setor Financeiro',
    		'Setor de Pesquisa'
    	];

        foreach ($setores as $s) {
        	$setor = new Setor;
        	$setor->descricao = $s;
        	$setor->save();
        }
    }
}
