<?php

use Illuminate\Database\Seeder;

class InstrumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instruments')->insert([
                ['name' => 'NIKE '],
                ['name' => 'adidas '],
                ['name' => 'VANS '],
                ['name' => 'new balance '],
                ['name' => 'Reebok '],
                ['name' => 'CONVERSE '],
                ['name' => 'PUMA '],
                ['name' => 'Onitsuka Tiger '],
                ['name' => 'Asics '],
                ['name' => 'HOKA ONE ONE '],
                ['name' => 'Balenciaga '],
                ['name' => 'FILA '],
                ['name' => 'Saucony '],
                ['name' => 'LACOSTE '],
            ]);
    }
}

