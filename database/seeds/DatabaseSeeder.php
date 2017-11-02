<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(SetorSeeder::class);
        $this->call(ProcessoSeed::class);
        $this->call(PessoaSeeder::class);
    }
}
