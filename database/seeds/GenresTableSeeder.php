<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => '23~24'],
            ['name' => '24~25'],
            ['name' => '26~27'],
            ['name' => '27~28'],
        ]);
    }
}
