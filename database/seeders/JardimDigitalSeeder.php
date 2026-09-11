<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JardimDigitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {    //Céu da Savana
        \App\Models\JardimDigital::create([
            'titulo' => 'Céu de Savana',
            'slug' => 'ceu-de-savana',
            'descricao' => 'Uma imersão nas cores quentes do crepúsculo, onde a
                silhueta de uma acácia se destaca contra um céu em degradê vibrante. Esta obra, 
                criada em 2021, representa o momento em que a luz se despede e 
                a natureza pulsa em seu estado mais puro e sereno. É um convite para sentir o calor 
                do sol e a quietude da terra.',
            'imagem' => 'img/africa.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);
            // AO BALANÇO DO LUAR
        \App\Models\JardimDigital::create([
            'titulo' => 'Ao Balanço do Luar',
            'slug' => 'balanco-do-luar',
            'descricao' => 'Uma obra que captura o encontro entre a fantasia e o descanso da natureza.
                Sob a luz de uma lua vibrante, a silhueta de uma criança no balanço torna-se o ponto central 
                de uma atmosfera mística. O uso de brilhos circulares sugere uma 
                redoma de proteção e sonhos, convidando o espectador a retornar à pureza da infância em meio à escuridão serena da floresta.',
            'imagem' => 'img/a-menina-do-balanco.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'

        ]); 
            //AMOR ETERRNO
         \App\Models\JardimDigital::create([
            'titulo' => 'Amor Eterno',
            'slug' => 'amor-eterno',
            'descricao' => 'Uma representação sensível da conexão humana em harmonia com os ciclos naturais.
                Nesta obra, duas silhuetas observam a magnitude de uma lua plena, cercadas por uma vegetação que pulsa
                sob o céu estrelado. É um convite à contemplação e ao reconhecimento de que os laços mais fortes são 
                aqueles cultivados sob a luz da alma e da natureza.',
            'imagem' => 'img/amor-eterno.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);
   
            //Onde o Sol se Esconde
         \App\Models\JardimDigital::create([
            'titulo' => 'Anoitecer em Chamas',
            'slug' => 'anoitecer-em-chamas',
            'descricao' => 'Uma explosão cromática que captura o exato instante em que o dia cede lugar à noite. 
                Nesta composição de 2021, o horizonte é tomado por tons de vermelho e laranja profundos, enquanto as 
                silhuetas das árvores se fundem à escuridão da terra. O céu superior, já salpicado de estrelas, traz 
                o equilíbrio frio necessário para uma cena que transborda energia e calma simultaneamente.',
            'imagem' => 'img/anoitecer.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);
            //Cachoeira das Estações
        \App\Models\JardimDigital::create([
            'titulo' => 'Cachoeira das Estações',
            'slug' => 'cachoeira-estacoes',
            'descricao' => 'Nesta obra de 2021, a natureza se manifesta em uma explosão de cores e contrastes. 
                Uma cachoeira cristalina corta um vale vibrante, ladeada por árvores de folhagem escarlate que 
                desafiam a paisagem tradicional. É uma representação da força e do frescor do ambiente natural, 
                desenhada para que o espectador sinta o movimento da água e o frescor que emana da alma da terra.',
            'imagem' => 'img/cachoeira.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);

            //Onde a Lua nos Guarda
        \App\Models\JardimDigital::create([
            'titulo' => 'Onde a Lua nos Guarda',
            'slug' => 'casal-ao-luar',
            'descricao' => 'Uma obra que celebra a união e o afeto em sua forma mais pura. 
                Sob um céu estrelado e uma lua imponente que ilumina o horizonte em tons de azul
                e turquesa, as silhuetas de um casal se tornam o ponto de conexão entre o humano
                 e o divino. A textura vibrante das nuvens e a delicadeza dos ramos criam uma 
                 atmosfera mística, onde o tempo parece parar para contemplar o amor e a vibração da noite.',
            'imagem' => 'img/casal-ao-luar.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);

        
            //Ipê
        \App\Models\JardimDigital::create([
            'titulo' => 'Natureza em Êxtase',
            'slug' => 'florescer-da-noite',
            'descricao' => 'O Ipê-Rosa — símbolo de resiliência e beleza —
                é retratado em um momento de comunhão com o cosmos. A copa intensamente 
                colorida contrasta com um céu degradê que transita da serenidade do azul 
                turquesa à profundidade do infinito estrelado. A lua cheia, perfeitamente
                posicionada, serve como um farol que ilumina não apenas a paisagem, mas a
                vibração vital que emana da própria terra.',
            'imagem' => 'img/ipe-rosa.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);

          //Mandala azul
        \App\Models\JardimDigital::create([
            'titulo' => 'Ponto de Equilíbrio',
            'slug' => 'geometria-da-alma',
            'descricao' => 'Uma exploração visual do equilíbrio e da centralidade. 
                Esta mandala, executada com precisão em tons de azul, ciano e turquesa,
                destaca-se contra um fundo abissal salpicado de estrelas. Cada detalhe
                circular representa a expansão da consciência e a busca pela harmonia 
                interior, transformando a tela em um campo de energia serena que convida 
                à contemplação profunda.',
            'imagem' => 'img/mandala.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);

            //Meu Paraíso Particular
        \App\Models\JardimDigital::create([
            'titulo' => 'Meu Paraíso Particular',
            'slug' => 'meu-paraiso-particular',
            'descricao' => 'Nesta obra, a natureza é retratada como um santuário
                de cores e paz. Uma cachoeira cristalina flui entre montanhas verdejantes, 
                sob a vigilância de uma lua plena que banha o cenário com uma luz mística. 
                As árvores de folhagem vibrante em tons de rosa e púrpura simbolizam a diversidade
                da vida que floresce quando a alma encontra seu verdadeiro refúgio. É uma janela
                para um mundo onde o tempo desacelera e a vibração da terra se torna visível aos olhos.',
            'imagem' => 'img/meu-paraiso-particular.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);

        
            //Minha Noite Estrelada
        \App\Models\JardimDigital::create([
            'titulo' => 'Minha Noite Estrelada',
            'slug' => 'minha-noite-estrelada',
            'descricao' => 'Nesta releitura de um dos maiores clássicos da história da arte,
                a técnica encontra a expressão pessoal. Através de pinceladas carregadas e vibrantes, 
                a obra captura a energia turbulenta e mágica de um céu noturno. O contraste entre o 
                cipreste escuro que sobe em direção ao infinito e as espirais douradas da lua e das 
                estrelas cria uma atmosfera de sonho e contemplação, trazendo o legado de Van Gogh 
                para a visão única do Ateliê Botânico.',
            'imagem' => 'img/minha-noite-estrelada.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);

         //Serenidade de uma Noite Fria
        \App\Models\JardimDigital::create([
            'titulo' => 'serenidade-noite-fria',
            'slug' => 'minha-noite-estrelada',
            'descricao' => 'O contraste perfeito entre a frieza do azul noturno e o brilho acolhedor
                de uma lua plena. Nesta composição, a luz atravessa as folhagens de forma delicada, 
                criando uma atmosfera de silêncio e paz. Uma representação visual do frescor da noite
                e do mistério que as sombras revelam sob o luar.',
            'imagem' => 'img/serenidade-noite-fria.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);

         //Vale da Serenidade
        \App\Models\JardimDigital::create([
            'titulo' => 'Vale da Serenidade',
            'slug' => 'vale-da-serenidade',
            'descricao' => 'A paisagem se abre em um convite à contemplação.
                Árvores de copas rosadas pontuam um campo verdejante, guiando o olhar 
                até a imponência silenciosa das montanhas sob um céu azul infinito.
                O sol, posicionado de forma a iluminar todo o vale, simboliza a clareza 
                e o florescer de novas ideias. Uma composição que equilibra a força da 
                terra com a leveza do horizonte.',
            'imagem' => 'img/vale-da-serenidade.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);

        //Onde o Sol Repousa
        \App\Models\JardimDigital::create([
            'titulo' => 'Onde o Sol Repousa',
            'slug' => 'reflexos-de-ouro',
            'descricao' => 'Uma celebração da luz e do calor. Nesta obra, 
                sol se posiciona como o coração da paisagem, lançando um rastro 
                dourado sobre as águas tranquilas. As montanhas e árvores em silhueta 
                emolduram um céu que queima em tons de carmesim e ouro, capturando a energia
                vibrante de um pôr do sol que renova as esperanças e aquece a alma.',
            'imagem' => 'img/reflexos-de-ouro.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);

        //Um Luar
        \App\Models\JardimDigital::create([
            'titulo' => 'Um Luar',
            'slug' => 'reflexos-de-ouro',
            'descricao' => 'A quietude da noite é celebrada através de um degradê profundo de 
                azuis e violetas. As silhuetas das árvores funcionam como rendas naturais, emoldurando 
                uma lua plena que banha a paisagem com uma aura mística. As nuvens estilizadas ao topo 
                trazem movimento e textura, convidando o espectador a um momento de introspecção e paz 
                sob o manto estrelado do céu.',
            'imagem' => 'img/um-luar.jpeg',
            'destaque' => true,
            'categoria' => 'Pintura Acrílica sobre Tela'
        ]);











    }
}
