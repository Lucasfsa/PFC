<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
        	'rz_social'=>'Padaria',
            'cnpj' => '00000000000001',
            'email' => 'padaria@gmail.com',
            'telefone' => '35410001',
            'id_funcionario' => 1,

        ]
    );
	
	DB::table('clientes')->insert([
        	'rz_social'=>'Farmacia',
            'cnpj' => '00000000000002',
            'email' => 'farmacia@gmail.com',
            'telefone' => '35410002',
            'id_funcionario' => 1,

        ]
    );

	DB::table('clientes')->insert([
        	'rz_social'=>'Lanchonete',
            'cnpj' => '00000000000003',
            'email' => 'lanchonete@gmail.com',
            'telefone' => '35410003',
            'id_funcionario' => 2,

        ]
    );

    DB::table('clientes')->insert([
            'rz_social'=>'Mercadinho',
            'cnpj' => '00000000000004',
            'email' => 'mercadinho@gmail.com',
            'telefone' => '35410004',
            'id_funcionario' => 2,

        ]
    );

    }
}
		