<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SoftwaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('softwares')->insert([
            'nome_software' => 'SYSPDV',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('softwares')->insert([
            'nome_software' => 'ACSN',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('softwares')->insert([
            'nome_software' => 'ECLÉTICA',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
