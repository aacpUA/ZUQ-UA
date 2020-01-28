<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Institution::create([
            'name' => 'Universidade de Aveiro',
            'info' => 'Criada em 1973, a Universidade de Aveiro (UA) transformou-se numa das mais dinâmicas e inovadoras universidades do país.

            Frequentada por cerca de 15.000 alunos, assumiu um papel de relevância no panorama universitário do país, no que diz respeito à qualidade das infraestruturas e à excelência do seu corpo docente.',
            'type_id' => 1,
            'region_id' => 2
         ]);
        \App\Institution::create([
            'name' => 'Faculdade Arquitectura da Universidade do Porto',
            'info' => 'Ensinar Arquitectura - a concepção e a construção do objecto ou da cidade na sua forma mais sublime que satisfaça o físico e o psíquico do homem, individual ou socialmente considerado - é difícil e apaixonante.',
            'type_id' => 1,
            'region_id' => 1
         ]);
        \App\Institution::create([
            'name' => 'Faculdade Engenharia da Universidade do Porto',
            'info' => 'A FEUP é uma das instituições de referência global em diversas áreas de Engenharia para estudantes, técnicos, investigadores e gestores, e para inúmeras organizações, nacionais e internacionais. Tal deve-se ao trabalho de toda a sua Comunidade e de muitos parceiros, ao longo de muitos anos, de uma forma persistente, ultrapassando obstáculos de vária natureza, e sempre aproveitando oportunidades para se desenvolver.',
            'type_id' => 1,
            'region_id' => 1
         ]);
        \App\Institution::create([
            'name' => 'Faculdade Ciências da Universidade do Porto',
            'info' => 'A FCUP integrou o núcleo inicial de Faculdades da Universidade do Porto na sua criação em 1911 e continua comprometida na exploração das oportunidades de cooperação e colaboração com outras entidades internas à UP, com entidades nacionais ou internacionais.',
            'type_id' => 1,
            'region_id' => 1
         ]);
        \App\Institution::create([
            'name' => 'Faculdade Ciências da Universidade de Lisboa',
            'info' => 'A Faculdade de Ciências é uma das 18 escolas da Universidade de Lisboa (ULisboa). Tem como missão expandir os limites do conhecimento científico e tecnológico, transferir esse conhecimento para a sociedade e promover a educação dos seus estudantes através da prática da investigação e desenvolvimento de uma cultura de aprendizagem permanente, valorizando o pensamento crítico e a autonomia intelectual.',
            'type_id' => 1,
            'region_id' => 3
         ]);
    }
}
