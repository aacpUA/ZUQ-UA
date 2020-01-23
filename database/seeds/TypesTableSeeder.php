<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Type::create([
            'name' => 'Universidade Pública',
        ]);
        \App\Type::create([
            'name' => 'Universidade Privada',
        ]);
        \App\Type::create([
            'name' => 'Politécnico',
        ]);
    }
}
