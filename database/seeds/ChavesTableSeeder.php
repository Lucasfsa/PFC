<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ChavesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chaves')->insert([
            'cod_chave' => 'UEJD-SKEO-DIOS',
            'cliente' => 'gbarbosa',
            'sistema' => 'acsn',
            'user_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
