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
            'name' => 'Administração Pública',
            'info' => 'O modelo desta licenciatura em Administração Pública apresenta uma base curricular comum, complementada por troncos opcionais (aqui denominados de Menores) nas áreas de políticas públicas, ciência política e planeamento regional e urbano.',
            'website' => 'https://www.ua.pt/pt/curso/54',
            'institution_id' => 1,
            'study_cycle_id' => 1,
            'area_id' => 5
         ]);
        \App\Course::create([
            'name' => 'Biologia',
            'info' => 'A organização curricular da licenciatura em Biologia (1º ciclo) pretende fornecer ao estudante uma formação integrada, mas de largo espetro, das Ciências Biológicas, permitindo-lhe, no entanto, alguma formação diferenciada que pode levar a uma posterior especialização a adquirir com o mestrado (2º ciclo) e com o doutoramento (3º ciclo).',
            'website' => 'https://www.ua.pt/pt/curso/14',
            'institution_id' => 1,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
        \App\Course::create([
            'name' => 'Biologia e Geologia',
            'info' => 'Aquando da adaptação dos cursos de licenciatura ao Processo de Bolonha, levada a cabo em 2006, os departamentos de Geociências e de Biologia da UA decidiram propor a transformação do antigo curso em Ensino de Biologia e Geologia numa licenciatura em Biologia e Geologia, o que veio a ser aprovado pelo MCTES.',
            'website' => 'https://www.ua.pt/pt/curso/15',
            'institution_id' => 1,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
        \App\Course::create([
            'name' => 'Bioquímica',
            'info' => 'A Licenciatura em Bioquímica pretende dar aos alunos uma formação sólida e integrada em temáticas básicas tais como Bioquímica, Química, Biologia, Matemática, Biologia Celular e Genética que permitam o entendimento da estrutura, organização e funcionamento dos sistemas vivos sob um ponto de vista molecular.',
            'website' => 'https://www.ua.pt/pt/curso/16',
            'institution_id' => 1,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
        \App\Course::create([
            'name' => 'Biotecnologia',
            'info' => 'Pretende-se com a Licenciatura em Biotecnologia conferir uma formação transversal de espetro largo aos Licenciados que lhes permita o acesso ao mercado de trabalho em empresas de base biotecnológica, agroalimentar, farmacêutica, ambiental, agroquímica ou afins.',
            'website' => 'https://www.ua.pt/pt/curso/17',
            'institution_id' => 1,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
    }
}
