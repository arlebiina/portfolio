<?php

class Projeto {
    
    public function getProjetosDestaque() {
        return [
            [
                'titulo' => 'Sistema de TCC',
                'descricao' => 'Sistema completo desenvolvido como projeto de conclusão de curso, aplicando regras de negócio complexas.',
                'tecnologias' => ['PHP', 'MySQL', 'Bootstrap', 'MVC'],
                'categoria' => 'php-mvc'
            ],
            [
                'titulo' => 'Jogo da Semana da Biblioteca',
                'descricao' => 'Aplicação interativa desenvolvida para incentivar a leitura durante o evento acadêmico da biblioteca.',
                'tecnologias' => ['HTML5', 'CSS3', 'JavaScript'],
                'categoria' => 'front-end'
            ]
        ];
    }
    
    public function getProjetosAutorais() {
        return [
            [
                'titulo' => 'Jogo dos Blocos',
                'descricao' => 'Jogo de lógica e reflexo baseado em quebra-cabeças de blocos clássicos com manipulação de DOM.',
                'tecnologias' => ['HTML5', 'CSS3', 'JavaScript'],
                'categoria' => 'front-end'
            ],
            [
                'titulo' => 'Sistema Sabores',
                'descricao' => 'Plataforma web voltada para gerenciamento de cardápios e pedidos para o segmento de gastronomia.',
                'tecnologias' => ['PHP', 'MySQL', 'CSS Grid'],
                'categoria' => 'php-mvc'
            ],
            [
                'titulo' => 'Portfólio Extra & Automações',
                'descricao' => 'Scripts personalizados e pequenas ferramentas utilitárias criadas para otimizar rotinas de estudo.',
                'tecnologias' => ['JavaScript', 'PHP', 'Git'],
                'categoria' => 'banco-dados'
            ]
        ];
    }
}
?>
