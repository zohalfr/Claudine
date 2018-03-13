<?php

use Illuminate\Database\Seeder;

class BagageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


            DB::table('bagages')->insert([
            'ID' => str_random(10),
            'bagage' => str_random(10),
          
        ]);
    }
}
