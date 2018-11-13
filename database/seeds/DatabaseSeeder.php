<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(User::class);
    	 $this->call(Cliente::class);
         $this->call(Software::class);
         $this->call(ChaveDeAcesso::class);
        //  $this->call(SoftwareA::class);
        //  $this->call(SoftwareB::class);
        //  $this->call(SoftwareC::class);
    }
}
