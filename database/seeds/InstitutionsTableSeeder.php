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
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fsimposiooge.web.ua.pt%2F2017%2Fwp-content%2Fuploads%2F2017%2F02%2Freitoria.jpg&f=1&nofb=1',
            'type_id' => 1,
            'region_id' => 2
         ]);
        \App\Institution::create([
            'name' => 'Faculdade Arquitectura da Universidade do Porto',
            'info' => 'Ensinar Arquitectura - a concepção e a construção do objecto ou da cidade na sua forma mais sublime que satisfaça o físico e o psíquico do homem, individual ou socialmente considerado - é difícil e apaixonante.',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fe%2Fe1%2FFaculdade_de_Arquitectura_da_Universidade_do_Porto._%25286086399088%2529.jpg&f=1&nofb=1',
            'type_id' => 1,
            'region_id' => 1
         ]);
        \App\Institution::create([
            'name' => 'Faculdade Engenharia da Universidade do Porto',
            'info' => 'A FEUP é uma das instituições de referência global em diversas áreas de Engenharia para estudantes, técnicos, investigadores e gestores, e para inúmeras organizações, nacionais e internacionais. Tal deve-se ao trabalho de toda a sua Comunidade e de muitos parceiros, ao longo de muitos anos, de uma forma persistente, ultrapassando obstáculos de vária natureza, e sempre aproveitando oportunidades para se desenvolver.',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Falumni.up.pt%2Fwp-content%2Fuploads%2F2015%2F06%2FFEUP.jpg&f=1&nofb=1',
            'type_id' => 1,
            'region_id' => 1
         ]);
        \App\Institution::create([
            'name' => 'Faculdade Ciências da Universidade do Porto',
            'info' => 'A FCUP integrou o núcleo inicial de Faculdades da Universidade do Porto na sua criação em 1911 e continua comprometida na exploração das oportunidades de cooperação e colaboração com outras entidades internas à UP, com entidades nacionais ou internacionais.',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fnoticias.up.pt%2Fwp-content%2Fuploads%2F2014%2F10%2Ffcup-destaque.jpg&f=1&nofb=1',
            'type_id' => 1,
            'region_id' => 1
         ]);
        \App\Institution::create([
            'name' => 'Faculdade Ciências da Universidade de Lisboa',
            'info' => 'A Faculdade de Ciências é uma das 18 escolas da Universidade de Lisboa (ULisboa). Tem como missão expandir os limites do conhecimento científico e tecnológico, transferir esse conhecimento para a sociedade e promover a educação dos seus estudantes através da prática da investigação e desenvolvimento de uma cultura de aprendizagem permanente, valorizando o pensamento crítico e a autonomia intelectual.',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F8%2F8d%2FFaculdade_de_Ci%25C3%25AAncias_da_Universidade_de_Lisboa_9242.jpg&f=1&nofb=1',
            'type_id' => 1,
            'region_id' => 3
         ]);
        \App\Institution::create([
            'name' => 'Universidade do Algarve',
            'info' => 'A Universidade do Algarve, tal como existe neste momento, resultou da união das duas instituições previamente existentes: a Universidade do Algarve, criada pela Lei n.º 11/79 de 28 de Março e o Instituto Politécnico de Faro, criado pelo decreto-lei n.º 513-T/79, de 26 de Dezembro.

            Em 1982 foi nomeado o primeiro reitor da Universidade do Algarve, o Prof. Doutor Gomes Guerreiro, a quem sucederam o Prof. Doutor Carlos Alberto Lloyd Braga (1986), o Prof. Doutor Jacinto José Montalvão dos Santos e Silva Marques (1990), o Prof. Doutor Eugénio Maria de Melo Alte da Veiga (1993), o Prof. Doutor Adriano Lopes Gomes Pimpão (1998), o Prof. Doutor João Guerreiro, (2006), o Prof. Doutor António Branco (2013). O atual reitor, o Prof. Doutor Paulo Águas, iniciou o seu mandato em dezembro de 2017.',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.sulinformacao.pt%2Fwp-content%2Fuploads%2F2018%2F03%2FUAlg_UNIVERSIDADE-DO-ALGARVE_GAMBELAS_ENTRADA_3-1024x683.jpg&f=1&nofb=1',
            'type_id' => 1,
            'region_id' => 3
         ]);
        \App\Institution::create([
            'name' => 'Universidade dos Açores',
            'info' => 'Fundada em 1976, a Universidade dos Açores consolidou-se ao longo das décadas como uma instituição de referência no seio do arquipélago, conseguindo edificar laços científicos e culturais dentro e inter-ilhas. Mas firmou-se também como uma instituição de caráter universalista, potenciando a relevância que a sua natureza atlântica lhe confere: uma verdadeira ponte entre a Europa, as Américas e outras geografias do saber, confirmando que, nela, a Scientia Lucet.',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.crup.pt%2Fcrup%2Fsitecrup%2Fwp-content%2Fuploads%2F2016%2F09%2Funiversidade_acores.jpg&f=1&nofb=1',
            'type_id' => 1,
            'region_id' => 4
         ]);
    }
}
