<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Region::create([
            'name' => 'Norte',
        ]);
        \App\Region::create([
            'name' => 'Centro',
        ]);
        \App\Region::create([
            'name' => 'Sul',
        ]);
        \App\Region::create([
            'name' => 'Ilhas',
        ]);

    }
}
