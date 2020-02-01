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
            'name' => 'Licenciaturas e Mestrados Integrados'
         ]);
        \App\StudyCycle::create([
            'name' => 'Mestrados'
         ]);
        \App\StudyCycle::create([
            'name' => 'Doutoramentos'
         ]);
    }
}
