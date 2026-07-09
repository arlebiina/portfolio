<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio dev</title>
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2285%22 fill=%22%23F7BCC6%22>♥</text></svg>">
    
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- Faixa Quadriculada Decorativa -->
    <div class="faixa-quadriculada"></div>

    <!-- Barra de Navegação Horizontal -->
    <nav class="navbar">
        <div class="nav-container-split">
            <span class="nav-titulo-retro">-★ Portfólio.dev ૮૩</span>
            <div class="nav-botoes-direita">
                <a href="https://onecompiler.com/users/43s2gqf2s" target="_blank" class="nav-link-clean">OneCompiler</a>
                <a href="https://github.com/arlebiina" target="_blank" class="nav-link-clean">GitHub</a>
            </div>
        </div>
    </nav>

    <!-- Layout Grid Principal -->
    <div class="portfolio-grid-container">
        
        <!-- COLUNA PRINCIPAL: Biografia e Projetos -->
        <main class="coluna-principal">
            
            <!-- Seção de Biografia (Maria) -->
            <section id="biografia" class="bloco-conteudo">
                <div class="perfil-topo">
                    <img src="img/perfil.png" alt="Foto de Perfil" class="foto-perfil">
                    <div class="titulos-perfil">
                        <h1>Olá, eu sou a Maria</h1>
                        <p class="subtitle">Desenvolvedora Web | Arquitetura MVC</p>
                    </div>
                </div>
                <p class="bio-text">
                    Desenvolvedora apaixonada por tecnologia e focada em construir aplicações estruturadas, limpas e performáticas. Este espaço reúne as competências e projetos práticos que desenvolvi ao longo do meu percurso de aprendizado em TI utilizando o padrão arquitetural Model-View-Controller.
                </p>
                <a href="#destaques" class="btn-primary">Ver Projetos</a>
            </section>

            <!-- Seção de Projetos em Destaque -->
            <section id="destaques" class="bloco-conteudo">
                <h2 class="section-title">Projetos de Destaque*</h2>
                
                <!-- Filtros de Categorias -->
                <div class="filtro-container">
                    <button class="btn-filtro ativo" data-filter="all">All</button>
                    <button class="btn-filtro" data-filter="php">PHP / MVC</button>
                    <button class="btn-filtro" data-filter="js">JavaScript</button>
                </div>
                
                <!-- Grade de Cards dos Projetos -->
                <div class="projects-grid">
                    
                    <!-- Projeto 1: Sistema Sabores -->
                    <a href="https://github.com/arlebiina/sistema-saboris" target="_blank" class="project-card-link" data-tech="php">
                        <div class="project-card">
                            <div>
                                <h3>Sistema Sabores</h3>
                                <p>Plataforma web voltada para gerenciamento de cardápios e pedidos para o segmento de gastronomia seguindo a arquitetura MVC.</p>
                            </div>
                            <div class="tech-tags">
                                <span class="tag">PHP</span>
                                <span class="tag">MySQL</span>
                                <span class="tag">MVC</span>
                            </div>
                        </div>
                    </a>

                    <!-- Projeto 2: Trackfix -->
                    <a href="https://github.com/arlebiina/trackfix" target="_blank" class="project-card-link" data-tech="js">
                        <div class="project-card">
                            <div>
                                <h3>Trackfix</h3>
                                <p>Aplicação otimizada desenvolvida para controle de fluxos, marcações de horários e gestão em tempo real.</p>
                            </div>
                            <div class="tech-tags">
                                <span class="tag">PHP</span>
                                <span class="tag">JavaScript</span>
                                <span class="tag">CSS</span>
                            </div>
                        </div>
                    </a>

                    <!-- Projeto 3: Stackdown -->
                    <a href="https://github.com/arlebiina/stackdown" target="_blank" class="project-card-link" data-tech="php">
                        <div class="project-card">
                            <div>
                                <h3>Stackdown</h3>
                                <p>Estrutura focada no gerenciamento interno de dados, relatórios e organização arquitetada em camadas organizadas.</p>
                            </div>
                            <div class="tech-tags">
                                <span class="tag">HTML</span>
                                <span class="tag">JavaScript</span>
                                <span class="tag">CSS</span>
                            </div>
                        </div>
                    </a>

                    <!-- Projeto 4: Crônicas do Saber -->
                    <a href="https://github.com/arlebiina/cronicas-do-saber" target="_blank" class="project-card-link" data-tech="js">
                        <div class="project-card">
                            <div>
                                <h3>Crônicas do Saber</h3>
                                <p>Plataforma interativa voltada para leitura, acervo acadêmico ou literário utilizando elementos interativos dinâmicos.</p>
                            </div>
                            <div class="tech-tags">
                                <span class="tag">HTML</span>
                                <span class="tag">JavaScript</span>
                                <span class="tag">CSS</span>
                            </div>
                        </div>
                    </a>

                </div>
            </section>
        </main>

        <!-- COLUNA LATERAL: Formulário e Habilidades -->
        <aside class="coluna-lateral">
            
            <!-- Formulário de Contato -->
            <section id="contato" class="bloco-lateral-conteudo">
                <h2 class="sidebar-title">Contact*</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" id="nome" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail para retorno</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Sua mensagem</label>
                        <textarea id="mensagem" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Enviar Mensagem</button>
                </form>
            </section>

            <!-- Habilidades Técnicas -->
            <section class="bloco-lateral-conteudo">
                <h2 class="sidebar-title">Technical Skills</h2>
                <div class="skills-pills">
                    <span class="pill">Architecture MVC</span>
                    <span class="pill">PHP Fundamental</span>
                    <span class="pill">MySQL Database</span>
                    <span class="pill">HTML5 & CSS3</span>
                    <span class="pill">JavaScript ES6</span>
                </div>
            </section>
        </aside>

    </div>

    <!-- Rodapé Fixo (Contador de Interações) -->
    <footer class="contador-cliques" id="contador-rodape">
        Interação com o portfólio: 0 🌟
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
