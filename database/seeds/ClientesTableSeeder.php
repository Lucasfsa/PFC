<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*=====================CLIENTES SYSPDV=========================*/
        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Brito Pimentel',
            'cnpj' => '86.902.475/0001-99',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Reginaldo Barreto Santiago',
            'cnpj' => '26.879.525/0001-28',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Casa do Agricultor',
            'cnpj' => '04.719.693/0001-28',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Cestão Supermercado',
            'cnpj' => '96.799.960/0001-32',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Clarinha Confecções',
            'cnpj' => '04.352.461/0001-84',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Casa Mata',
            'cnpj' => '07.434.696/0001-03',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Dsuco',
            'cnpj' => '23.250.291/0001-71',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Fast Collor Boulevard',
            'cnpj' => '23.843.651/0001-49',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Hiper Frutas',
            'cnpj' => '24.095.324/0001-19',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'J. Des. Leite Material de Construção',
            'cnpj' => '08.812.167/0001-69',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'O Bicho',
            'cnpj' => '08.761.479/0001-90',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Rodrido Bastos Araujo',
            'cnpj' => '13.520.749/0001-01',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Silterm',
            'cnpj' => '12.960.601/0001-25',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Sangue Bom Montagens',
            'cnpj' => '03.372.168/0001-16',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Ultra Informatica',
            'cnpj' => '05.776.490/0001-36',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Vinan Agropecuaria',
            'cnpj' => '96.703.962/0001-86',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Vida Saudavel Vale Ouro',
            'cnpj' => '11.984.469/0001-29',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Mercadinho Vargas Itaberaba',
            'cnpj' => '11.124.812/0001-65',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Grife de Carne',
            'cnpj' => '03.036.987/0001-92',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Flor da Chapada Delicatesen',
            'cnpj' => '09.350.535/0001-67',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Rocha Madereira',
            'cnpj' => '40.495.111/0001-30',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Restaurante Pai Thomaz',
            'cnpj' => '21.749.664/0001-28',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Bruna Comercio',
            'cnpj' => '03.430.798/0001-08',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Novo Baixinho',
            'cnpj' => '16.740.338/0001-10',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Dom Café',
            'cnpj' => '07.878.735/0001-61',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Emporio Batista',
            'cnpj' => '26.602.905/0001-25',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Duponto Alimentos',
            'cnpj' => '09.208.341/0001-21',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'J N Casa e Construção',
            'cnpj' => '24.574.474/0001-05',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'LC Jesus Silva e CIA',
            'cnpj' => '40.495.111/0001-30',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'O Barateiro',
            'cnpj' => '04.639.505/0001-51',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Nova Panilanches',
            'cnpj' => '02.154.830/0001-07',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Roma Supermercado',
            'cnpj' => '15.593.868/0001-10',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Moliveira Costa',
            'cnpj' => '14.514.094/0001-21',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Supermercado Iguatemi',
            'cnpj' => '12.518.511/0001-89',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Sucesso Rrepresentações',
            'cnpj' => '01.441.524/0001-80',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Agencia de Bicicletas Quatro Irmãos',
            'cnpj' => '03.247.750/0001-50',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'RMD Empreendimentos Turisticos e Hotel',
            'cnpj' => '21.749.664/0001-28',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Pousada Convento do Carmo',
            'cnpj' => '05.257.529/0001-09',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Pão Center Getulio',
            'cnpj' => '26.484.862/0001-20',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Pão Center Maria Quiteria',
            'cnpj' => '24.875.255/0001-66',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Pão Center Tomba',
            'cnpj' => '27.644.529/0001-02',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Skina de Carne Getulio Açouge',
            'cnpj' => '04.719.503/0001-72',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Skina Carne Fraga Maia',
            'cnpj' => '05.325.680/870',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Skina João Durval',
            'cnpj' => '10.140.261/0001-60',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Massa Beer',
            'cnpj' => '14.220.041/0001-06',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Kairós Papa 23',
            'cnpj' => '06.957.157/0001-96',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Kairós Getulio',
            'cnpj' => '16.401.069/0001-67',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Grife de Carne',
            'cnpj' => '03.036.987/0001-92',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        /* ===================  CLIENTES ACSN  =======================*/

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Bem me Quer',
            'cnpj' => '04.543.023/0001-01',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Capela Eletromoveis',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Germiniano Bispo Ferreira',
            'cnpj' => '?',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'J Neto Confecções',
            'cnpj' => '?',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        /*=======================CLIENTES ECLÉTICA=================*/


        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Boteco 156',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Casa do Pão de Queijo',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Gauchão Delivery',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Rancho Catarinense',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Restaurante Alaska',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Posto Puma',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Sorveteria Ki Delicia',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Sorveteria Nestle',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Stop Nill Kalilandia',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Teriaki Millenium',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'nome_fantasia' => '',
            'razao_social'=>'Tim Nibal',
            'cnpj' => '',
            'segmento' => '',
            'email' => '',
            'telefone' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
