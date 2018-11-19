<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EcleticaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ecletica')->insert([
            'cliente_software_id' => 53,
            'cod_rede'=> 977,
            'cod_loja'=> 540,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('ecletica')->insert([
            'cliente_software_id' => 54,
            'cod_rede'=> 977,
            'cod_loja'=> 708,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('ecletica')->insert([
            'cliente_software_id' => 55,
            'cod_rede'=> 977,
            'cod_loja'=> 651,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('ecletica')->insert([
            'cliente_software_id' => 56,
            'cod_rede'=> 977,
            'cod_loja'=> 560,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('ecletica')->insert([
            'cliente_software_id' => 57,
            'cod_rede'=> 977,
            'cod_loja'=> 769,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('ecletica')->insert([
            'cliente_software_id' => 58,
            'cod_rede'=> 977,
            'cod_loja'=> 696,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('ecletica')->insert([
            'cliente_software_id' => 59,
            'cod_rede'=> 977,
            'cod_loja'=> 764,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('ecletica')->insert([
            'cliente_software_id' => 60,
            'cod_rede'=> 977,
            'cod_loja'=> 384,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('ecletica')->insert([
            'cliente_software_id' => 61,
            'cod_rede'=> 977,
            'cod_loja'=> 492,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('ecletica')->insert([
            'cliente_software_id' => 62,
            'cod_rede'=> 977,
            'cod_loja'=> 245,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('ecletica')->insert([
            'cliente_software_id' => 63,
            'cod_rede'=> 977,
            'cod_loja'=> 636,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
