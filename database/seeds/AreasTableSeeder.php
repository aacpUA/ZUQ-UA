<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Area::create([
            'name' => 'Agricultura'
        ]);
        \App\Area::create([
            'name' => 'Artes'
        ]);
        \App\Area::create([
            'name' => 'Ciências'
        ]);
        \App\Area::create([
            'name' => 'Ciências Sociais'
        ]);
        \App\Area::create([
            'name' => 'Comércio e Direito'
        ]);
        \App\Area::create([
            'name' => 'Educação'
        ]);
        \App\Area::create([
            'name' => 'Engenharias'
        ]);
        \App\Area::create([
            'name' => 'Humanidades'
        ]);
        \App\Area::create([
            'name' => 'Informática'
        ]);
        \App\Area::create([
            'name' => 'Matemática'
        ]);
        \App\Area::create([
            'name' => 'Saúde'
        ]);
        \App\Area::create([
            'name' => 'Serviços'
        ]);
    }
}
