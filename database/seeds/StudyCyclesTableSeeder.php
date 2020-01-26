<?php

use Illuminate\Database\Seeder;

class StudyCyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\StudyCycle::create([
            'name' => 'licenciaturas e mestrados integrados'
         ]);
        \App\StudyCycle::create([
            'name' => 'licenciaturas e mestrados integrados'
         ]);
        \App\StudyCycle::create([
            'name' => 'licenciaturas e mestrados integrados'
         ]);
    }
}
