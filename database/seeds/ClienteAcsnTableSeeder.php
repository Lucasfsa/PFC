<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClienteAcsnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente_acsn')->insert([
            'cliente_id' => 49,
            'acsn_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_acsn')->insert([
            'cliente_id' => 50,
            'acsn_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_acsn')->insert([
            'cliente_id' => 51,
            'acsn_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_acsn')->insert([
            'cliente_id' => 52,
            'acsn_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
