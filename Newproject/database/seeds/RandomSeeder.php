<?php

use Illuminate\Database\Seeder;

class RandomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('randoms')->insert([
            ['categoryname' => 'Funny'],
            ['categoryname'=>'Dramma'],
            ['categoryname'=>'Action'],
            ['categoryname'=>'Ghost'],
      
            ]);
    }
}
