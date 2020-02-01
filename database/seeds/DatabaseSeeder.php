<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StudyCyclesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(InstitutionsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
    }
}
