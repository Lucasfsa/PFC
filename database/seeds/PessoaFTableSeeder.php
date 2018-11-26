<?php

use Illuminate\Database\Seeder;

class PessoaFTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoa_f')->insert([
            'cpf' => '053.256.808-70',
            'cliente_id' => 43,
        ]);
    }
}
