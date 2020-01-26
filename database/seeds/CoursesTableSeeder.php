<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Course::create([
            'name' => 'Universidade de Aveiro',
            'info' => 'Criada em 1973, a Universidade de Aveiro (UA) transformou-se numa das mais dinâmicas e inovadoras universidades do país.

            Frequentada por cerca de 15.000 alunos, assumiu um papel de relevância no panorama universitário do país, no que diz respeito à qualidade das infraestruturas e à excelência do seu corpo docente.',
            'type_id' => 1,
            'region_id' => 2
         ]);
    }
}
