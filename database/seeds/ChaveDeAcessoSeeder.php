<?php

use Illuminate\Database\Seeder;

class ChaveDeAcessoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chave_de_acessos')->insert([
        	'numero_Chave'=> '0000000000A1',
        	'id_Funcionario'=> 1,
            'id_ClienteSoftware' => 1,
        ]
    );

         DB::table('chave_de_acessos')->insert([
        	'numero_Chave'=> '0000000000A2',
        	'id_Funcionario'=> 1,
            'id_ClienteSoftware' => 2,
        ]
    );
          DB::table('chave_de_acessos')->insert([
        	'numero_Chave'=> '0000000000A3',
        	'id_Funcionario'=> 2,
            'id_ClienteSoftware' => 3,
        ]
    );

    }
}
