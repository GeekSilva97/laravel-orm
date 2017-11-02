<?php

use Illuminate\Database\Seeder;

use App\Models\Pessoa;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pessoa = new Pessoa();
        $pessoa->nome = 'Edigleysson Silva';
        $pessoa->save();
        $pessoa = new Pessoa();
        $pessoa->nome = 'Gleysson Rocha';
        $pessoa->save();
        $pessoa = new Pessoa();
        $pessoa->nome = 'Carlos Eduardo';
        $pessoa->save();
        $pessoa = new Pessoa();
        $pessoa->nome = 'João Neto';
        $pessoa->save();
    }
}
