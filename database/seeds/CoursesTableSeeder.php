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
            'email' => 'geral@ua.pt',
            'phone' => '234 370 200',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fsimposiooge.web.ua.pt%2F2017%2Fwp-content%2Fuploads%2F2017%2F02%2Freitoria.jpg&f=1&nofb=1',
            'institution_id' => 1,
            'study_cycle_id' => 1,
            'area_id' => 5
         ]);
        \App\Course::create([
            'name' => 'Biologia',
            'info' => 'A organização curricular da licenciatura em Biologia (1º ciclo) pretende fornecer ao estudante uma formação integrada, mas de largo espetro, das Ciências Biológicas, permitindo-lhe, no entanto, alguma formação diferenciada que pode levar a uma posterior especialização a adquirir com o mestrado (2º ciclo) e com o doutoramento (3º ciclo).',
            'website' => 'https://www.ua.pt/pt/curso/14',
            'email' => 'geral@ua.pt',
            'phone' => '234 370 200',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fsimposiooge.web.ua.pt%2F2017%2Fwp-content%2Fuploads%2F2017%2F02%2Freitoria.jpg&f=1&nofb=1',
            'institution_id' => 1,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
        \App\Course::create([
            'name' => 'Biologia e Geologia',
            'info' => 'Aquando da adaptação dos cursos de licenciatura ao Processo de Bolonha, levada a cabo em 2006, os departamentos de Geociências e de Biologia da UA decidiram propor a transformação do antigo curso em Ensino de Biologia e Geologia numa licenciatura em Biologia e Geologia, o que veio a ser aprovado pelo MCTES.',
            'website' => 'https://www.ua.pt/pt/curso/15',
            'email' => 'geral@ua.pt',
            'phone' => '234 370 200',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fsimposiooge.web.ua.pt%2F2017%2Fwp-content%2Fuploads%2F2017%2F02%2Freitoria.jpg&f=1&nofb=1',
            'institution_id' => 1,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
        \App\Course::create([
            'name' => 'Bioquímica',
            'info' => 'A Licenciatura em Bioquímica pretende dar aos alunos uma formação sólida e integrada em temáticas básicas tais como Bioquímica, Química, Biologia, Matemática, Biologia Celular e Genética que permitam o entendimento da estrutura, organização e funcionamento dos sistemas vivos sob um ponto de vista molecular.',
            'website' => 'https://www.ua.pt/pt/curso/16',
            'email' => 'geral@ua.pt',
            'phone' => '234 370 200',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fsimposiooge.web.ua.pt%2F2017%2Fwp-content%2Fuploads%2F2017%2F02%2Freitoria.jpg&f=1&nofb=1',
            'institution_id' => 1,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
        \App\Course::create([
            'name' => 'Biotecnologia',
            'info' => 'Pretende-se com a Licenciatura em Biotecnologia conferir uma formação transversal de espetro largo aos Licenciados que lhes permita o acesso ao mercado de trabalho em empresas de base biotecnológica, agroalimentar, farmacêutica, ambiental, agroquímica ou afins.',
            'website' => 'https://www.ua.pt/pt/curso/17',
            'email' => 'geral@ua.pt',
            'phone' => '234 370 200',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fsimposiooge.web.ua.pt%2F2017%2Fwp-content%2Fuploads%2F2017%2F02%2Freitoria.jpg&f=1&nofb=1',
            'institution_id' => 1,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);



        \App\Course::create([
            'name' => 'Arquitetura',
            'info' => 'O Mestrado Integrado em Arquitetura (MIArq) constitui o curso base de formação generalista da faup. O grau de mestre, a que permite aceder, comprova um nível aprofundado de conhecimentos na área disciplinar da arquitectura e urbanística, atestando a capacidade para o exercício da actividade profissional e/ou a prática da investigação nas referidas áreas. A funcionar em instalações próprias, projectadas por Álvaro Siza, a Escola do Porto, como internacionalmente é conhecida, constitui uma referência nacional e internacional na formação superior em Arquitectura.',
            'website' => 'https://sigarra.up.pt/faup/pt/cur_geral.cur_view?pv_origem=CAND&pv_curso_id=45',
            'email' => 'graduacao@arq.up.pt',
            'phone' => ' 22 605 71 00',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fe%2Fe1%2FFaculdade_de_Arquitectura_da_Universidade_do_Porto._%25286086399088%2529.jpg&f=1&nofb=1',
            'institution_id' => 2,
            'study_cycle_id' => 1,
            'area_id' => 7
         ]);


        \App\Course::create([
            'name' => 'Arquitectura Paisagista',
            'info' => 'O Mestrado Integrado em Arquitetura (MIArq) constitui o curso base de formação generalista da faup. O grau de mestre, a que permite aceder, comprova um nível aprofundado de conhecimentos na área disciplinar da arquitectura e urbanística, atestando a capacidade para o exercício da actividade profissional e/ou a prática da investigação nas referidas áreas. A funcionar em instalações próprias, projectadas por Álvaro Siza, a Escola do Porto, como internacionalmente é conhecida, constitui uma referência nacional e internacional na formação superior em Arquitectura.',
            'website' => 'https://sigarra.up.pt/fcup/pt/cur_geral.cur_view?pv_origem=CAND&pv_curso_id=1011',
            'email' => 'graduacao@arq.up.pt',
            'phone' => ' 22 605 71 00',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fnoticias.up.pt%2Fwp-content%2Fuploads%2F2014%2F10%2Ffcup-destaque.jpg&f=1&nofb=1',
            'institution_id' => 4,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
        \App\Course::create([
            'name' => 'Biologia',
            'info' => 'A licenciatura em Biologia está organizada de modo a fornecer formação teórica e prática (laboratorial e de campo) nas principais áreas da Biologia, incluindo Biodiversidade, Biologia Humana, Ecologia, Evolução, Fisiologia, Genética e Microbiologia, abordados nos aspetos clássicos e modernos decorrentes da Biologia Celular e Molecular, Bioquímica e Biotecnologia.',
            'website' => 'https://sigarra.up.pt/fcup/pt/cur_geral.cur_view?pv_origem=CAND&pv_curso_id=884',
            'email' => 'graduacao@arq.up.pt',
            'phone' => ' 22 605 71 00',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fnoticias.up.pt%2Fwp-content%2Fuploads%2F2014%2F10%2Ffcup-destaque.jpg&f=1&nofb=1',
            'institution_id' => 4,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
        \App\Course::create([
            'name' => 'Bioquímica',
            'info' => 'A formação de profissionais detentores de uma sólida base de conhecimentos fundamentais na área da Bioquímica, criando competências científicas e tecnológicas que permitam: a) a equivalência a Ciclos lecionados por instituições europeias de ensino do mesmo grau; b) à continuação, com razoável autonomia, para uma formação avançada em Bioquímica, ou em ciências afins, em cursos de 2º ciclo de estudos em instituições europeias; c) o seu acesso imediato ao mercado de trabalho.',
            'website' => 'https://sigarra.up.pt/fcup/pt/cur_geral.cur_view?pv_origem=CAND&pv_curso_id=863',
            'email' => 'apoio.estudante@fc.up.pt',
            'phone' => ' 220 402 000',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fnoticias.up.pt%2Fwp-content%2Fuploads%2F2014%2F10%2Ffcup-destaque.jpg&f=1&nofb=1',
            'institution_id' => 4,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
        \App\Course::create([
            'name' => 'Ciência de Computadores',
            'info' => 'Ciência de Computadores (CC) como tradução do termo inglês Computer Science, significa, na sua acepção mais geral, ciência que estuda a construção, os métodos e técnicas de utilização de computadores. Esta licenciatura proporciona uma sólida formação em programação dando especial ênfase aos fundamentos científicos que tornaram possível que os computadores sejam atualmente ferramentas potentes e imprescindíveis.',
            'website' => 'https://sigarra.up.pt/fcup/pt/cur_geral.cur_view?pv_origem=CAND&pv_curso_id=885',
            'email' => 'apoio.estudante@fc.up.pt',
            'phone' => ' 220 402 000',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fnoticias.up.pt%2Fwp-content%2Fuploads%2F2014%2F10%2Ffcup-destaque.jpg&f=1&nofb=1',
            'institution_id' => 4,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
        \App\Course::create([
            'name' => 'Ciências e Tecnologia do Ambiente',
            'info' => 'Proporcionar formação multidisciplinar e interdisciplinar que permita desenvolver uma compreensão científica dos processos ambientais e dos ecossistemas, e do modo como são afetados por fatores como a poluição do ar, da água e do solo. No 3º Ano, o Projeto permitirá ao aluno desenhar, com autonomia, uma proposta de projeto que, se for viável e inovadora, poderá abrir oportunidades interessantes de emprego ou autoemprego no futuro. O aluno poderá também prosseguir estudos de segundo ciclo em diversas áreas, incluindo Ciências e Tecnologia do Ambiente.',
            'website' => 'https://sigarra.up.pt/fcup/pt/cur_geral.cur_view?pv_origem=CAND&pv_curso_id=887',
            'email' => 'apoio.estudante@fc.up.pt',
            'phone' => ' 220 402 000',
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fnoticias.up.pt%2Fwp-content%2Fuploads%2F2014%2F10%2Ffcup-destaque.jpg&f=1&nofb=1',
            'institution_id' => 4,
            'study_cycle_id' => 1,
            'area_id' => 3
         ]);
    }
}
