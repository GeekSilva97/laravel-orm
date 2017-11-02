<?php

use Illuminate\Database\Seeder;

use App\Models\Processo;

class ProcessoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $processo = new Processo();
        $processo->numero = 123;
        $processo->save();

        $processo = new Processo();
        $processo->numero = 456;
        $processo->save();
    }
}
