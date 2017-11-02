<?php

use Illuminate\Database\Seeder;
use App\Setor;
use App\Solicitacao;
class SolicitacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $solicitacao = new Solicitacao;
        $solicitacao->assunto = 'Solicitação de testes de ORM usando Laravel';
        $solicitacao->descricao = 'Testar relacionamentos no Laravel para fazer códigos mais elegantes e funcionais';
        $solicitacao->id_setor = 2;
        $solicitacao->save();
    }
}
