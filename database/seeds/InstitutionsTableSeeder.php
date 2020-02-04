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
            'name' => 'Universidade do Minho',
            'info' => 'A Universidade do Minho está actualmente entre as mais prestigiadas instituições de ensino superior do país, tendo também vindo a afirmar-se progressivamente  no panorama internacional. ',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.guimaraesdigital.com%2Fimages%2Funiversidade_minho.jpg&f=1&nofb=1',
            'type_id' => 1,
            'region_id' => 1
         ]);



        \App\Institution::create([
            'name' => 'Faculdade Ciências da Universidade de Lisboa',
            'info' => 'A Faculdade de Ciências é uma das 18 escolas da Universidade de Lisboa (ULisboa). Tem como missão expandir os limites do conhecimento científico e tecnológico, transferir esse conhecimento para a sociedade e promover a educação dos seus estudantes através da prática da investigação e desenvolvimento de uma cultura de aprendizagem permanente, valorizando o pensamento crítico e a autonomia intelectual.',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F8%2F8d%2FFaculdade_de_Ci%25C3%25AAncias_da_Universidade_de_Lisboa_9242.jpg&f=1&nofb=1',
            'type_id' => 1,
            'region_id' => 2
         ]);
        \App\Institution::create([
            'name' => 'Universidade Aberta',
            'info' => 'Fundada em 1988, a Universidade Aberta (UAb) é a única instituição de ensino superior público a distância em Portugal.

            Pela sua vocação e natureza, a UAb utiliza nas suas atividades de ensino, as mais avançadas metodologias e tecnologias de ensino a distância orientadas para a educação sem fronteiras geográficas nem barreiras físicas, e dando especial enfoque à expansão da língua e da cultura portuguesas no espaço da lusofonia (comunidades migrantes e países de língua oficial portuguesa).',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fimages.e-konomista.pt%2Farticles%2F850_400_universidade-aberta.jpg&f=1&nofb=1',
            'type_id' => 1,
            'region_id' => 2
         ]);
        \App\Institution::create([
            'name' => 'Instituto Superior de Ciências Sociais e Políticas',
            'info' => 'O ISCSP promove a formação dos seus alunos nas áreas das Ciências Sociais e Políticas, oferecendo ensino graduado (licenciatura) e pós graduado, de segundo e terceiro nível, correspondente aos graus de mestre e de doutor. Na matriz do ensino incluem-se as áreas científicas da Sociologia, da Administração Pública e das Políticas Públicas, da Ciência Política, das Relações Internacionais, da Política Social, da Antropologia, e da Comunicação Social.',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.jornaleconomico.sapo.pt%2Fwp-content%2Fuploads%2F2018%2F07%2FEdificio-ISCSP-ULisboa.jpg&f=1&nofb=1',
            'type_id' => 3,
            'region_id' => 2
         ]);
        \App\Institution::create([
            'name' => 'Instituto Superior Técnico',
            'info' => 'O Instituto Superior Técnico é uma instituição centenária, com cerca de 11.000 alunos, que, desde 2013, passou a integrar a nova Universidade de Lisboa, a maior do país.',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F1%2F1a%2FInstituto_Superior_T%25C3%25A9cnico_8895.jpg&f=1&nofb=1',
            'type_id' => 3,
            'region_id' => 2
         ]);

        \App\Institution::create([
            'name' => 'Instituto Politécnico de Setúbal',
            'info' => 'O Instituto Politécnico de Setúbal (IPS) é uma instituição de ensino superior pública, constituída por cinco Escolas Superiores a funcionar em dois campus, Tecnologia de Setúbal, Educação, Ciências Empresariais e Saúde no campus de Setúbal e Tecnologia do Barreiro no campus do Barreiro. Com um campus numa das mais belas baías do mundo,',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.si.ips.pt%2Fese_si%2Fweb_gessi_docs.download_file%3Fp_name%3DF1523184872%2Fesedia27.jpg&f=1&nofb=1',
            'type_id' => 3,
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
            'name' => 'Instituto Piaget',
            'info' => 'A história do Instituto está intimamente ligada ao percurso e ao trabalho do homem que dá nome a este universo, Jean Piaget. Uma evolução marcada pela adaptação, pelo interesse natural na dinâmica e na mudança das coisas e pelo seu estudo. Uma história que se define numa transformação por etapas para ser cada vez melhor.',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.-LLTeE_u-y8C7SWLzB6h5QHaD8%26pid%3DApi&f=1',
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
