<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          DB::table('clients')->insert([
            'nom' => str_random(10),
            'prenom' => str_random(10),
            'tel' => random(10),
            'addresse' => str_random(50),
            'email' => str_random(10),
       ]);



    }
}
