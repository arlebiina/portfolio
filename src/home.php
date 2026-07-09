<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio dev</title>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="faixa-quadriculada"></div>

    <nav class="navbar">
        <div class="nav-container">
            <ul class="nav-links">
                <li><a href="#biografia" class="nav-link">Biografia</a></li>
                <li><a href="#destaques" class="nav-link">Projetos</a></li>
                <li><a href="#contato" class="nav-link">Contato</a></li>
                <li><button class="btn-nav-retro" id="btn-modo-hacker"><span class="icon">🤖</span> Modo Hacker</button></li>
                <li><a href="https://github.com/arlebiina" target="_blank" class="nav-link">GitHub</a></li>
            </ul>
        </div>
    </nav>

    <div class="portfolio-grid-container">
        
        <main class="coluna-principal">
            
            <section id="biografia" class="bloco-conteudo">
                <div class="perfil-topo">
                    <img src="img/perfil.png" alt="Foto de Perfil" class="foto-perfil">
                    <div class="titulos-perfil">
                        <h1>Olá, eu sou a Izadora</h1>
                        <p class="subtitle">Desenvolvedora Web | Arquitetura MVC</p>
                    </div>
                </div>
                <p class="bio-text">
                    Desenvolvedora apaixonada por tecnologia e focada em construir aplicações estruturadas, limpas e performáticas. Este espaço reúne as competências e projetos práticos que desenvolvi ao longo do meu percurso de aprendizado em TI utilizando o padrão arquitetural Model-View-Controller.
                </p>
                <a href="#destaques" class="btn-primary">Ver Projetos</a>
            </section>

            <section id="destaques" class="bloco-conteudo">
                <h2 class="section-title">Projetos de Destaque*</h2>
                
                <div class="filtro-container">
                    <button class="btn-filtro ativo" data-filter="all">All</button>
                    <button class="btn-filtro" data-filter="php">PHP / MVC</button>
                    <button class="btn-filtro" data-filter="js">JavaScript</button>
                </div>
                
                <div class="projects-grid">
                    
                    <a href="https://github.com/arlebiina/sistema-saboris" target="_blank" class="project-card-link" data-tech="php">
                        <div class="project-card">
                            <div>
                                <h3>Sistema Saboris</h3>
                                <p>Plataforma web voltada para gerenciamento de cardápios e pedidos para o segmento de gastronomia seguindo a arquitetura MVC.</p>
                            </div>
                            <div class="tech-tags">
                                <span class="tag">PHP</span>
                                <span class="tag">MySQL</span>
                                <span class="tag">MVC</span>
                            </div>
                        </div>
                    </a>

                    <a href="https://github.com/arlebiina/trackfix" target="_blank" class="project-card-link" data-tech="js">
                        <div class="project-card">
                            <div>
                                <h3>Trackfix</h3>
                                <p>Aplicação otimizada desenvolvida para controle de fluxos, marcações de horários e gestão em tempo real.</p>
                            </div>
                            <div class="tech-tags">
                                <span class="tag">JavaScript</span>
                                <span class="tag">Node.js</span>
                                <span class="tag">CSS</span>
                            </div>
                        </div>
                    </a>

                    <a href="https://github.com/arlebiina/stackdown" target="_blank" class="project-card-link" data-tech="php">
                        <div class="project-card">
                            <div>
                                <h3>Stackdown</h3>
                                <p>Estrutura focada no gerenciamento interno de dados, relatórios e organização arquitetada em camadas organizadas.</p>
                            </div>
                            <div class="tech-tags">
                                <span class="tag">PHP</span>
                                <span class="tag">MVC</span>
                                <span class="tag">MySQL</span>
                            </div>
                        </div>
                    </a>

                    <a href="https://github.com/arlebiina/cronicas-do-saber" target="_blank" class="project-card-link" data-tech="js">
                        <div class="project-card">
                            <div>
                                <h3>Crônicas do Saber</h3>
                                <p>Plataforma interativa voltada para leitura, acervo acadêmico ou literário utilizando elementos interativos dinâmicos.</p>
                            </div>
                            <div class="tech-tags">
                                <span class="tag">JavaScript</span>
                                <span class="tag">HTML5</span>
                                <span class="tag">CSS3</span>
                            </div>
                        </div>
                    </a>

                </div>
            </section>
        </main>

        <aside class="coluna-lateral">
            
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

    <button class="player-icone-gatilho" id="btn-abrir-player" title="Abrir Player">🎵</button>
    
    <div class="janela-player esconde-player" id="janela-player">
        <div class="barra-superior">
            <span>Retro Player.exe</span>
            <button id="btn-fechar-player" style="background:none; border:none; color:white; cursor:pointer; font-weight:bold;">X</button>
        </div>
        <div class="container-video-embed">
            <iframe id="video-iframe" src="https://www.youtube.com/embed/5qap5aO4i9A?enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="menu-playlist">
            <div class="item-track" data-video="5qap5aO4i9A">Track 1: Lofi Retro Beats</div>
            <div class="item-track" data-video="TURfzVXyLoo">Track 2: Synthwave Theme</div>
        </div>
    </div>

    <footer class="contador-cliques" id="contador-rodape">
        Interação com o portfólio: 0 🌟
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
