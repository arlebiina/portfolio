<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio Profissional Web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">Portfólio.dev</div>
            <ul class="nav-links">
                <li><a href="#biografia">Biografia</a></li>
                <li><a href="#destaques">Destaques</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><button id="btnToggleModo" class="btn-toggle-modo">🤖 Modo Hacker</button></li>
                <li><a href="https://github.com/" target="_blank" class="git-link">GitHub</a></li>
            </ul>
        </div>
    </nav>
    
    <header id="biografia" class="hero-section">
        <div class="hero-content">
            <h1>Olá, eu sou a Izadora</h1>
            <p class="subtitle">Desenvolvedora Web | Arquitetura MVC</p>
            <p class="bio-text">
                Desenvolvedora apaixonada por tecnologia e focada em construir aplicações estruturadas, limpas e performáticas. Este espaço reúne as competências e projetos práticos que desenvolvi ao longo do meu percurso de aprendizado em TI utilizando o padrão arquitetural Model-View-Controller.
            </p>
            <div class="hero-buttons">
                <a href="#destaques" class="btn-primary">Ver Projetos</a>
                <a href="#contato" class="btn-secondary">Fale Comigo</a>
            </div>
        </div>
    </header>

    <main class="caderno-container">
       
        <div class="bloco-pagina">
            <div class="sistema-espiral">
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
            </div>
            <section id="destaques" class="folha-caderno">
                <h2 class="section-title">Projetos de Destaque</h2>
                
                <div class="filtro-container">
                    <button class="btn-filtro ativo" data-filter="todos">[ Todos ]</button>
                    <button class="btn-filtro" data-filter="php-mvc">[ PHP / MVC ]</button>
                    <button class="btn-filtro" data-filter="front-end">[ Front-End ]</button>
                    <button class="btn-filtro" data-filter="banco-dados">[ Bancos de Dados ]</button>
                </div>

                <div class="projects-grid" id="grelhaProjetos">
                    <?php if (isset($projetosDestaque) && is_array($projetosDestaque)): ?>
                        <?php foreach ($projetosDestaque as $proj): ?>
                            <div class="project-card" data-category="<?php echo isset($proj['categoria']) ? htmlspecialchars($proj['categoria']) : 'php-mvc'; ?>">
                                <div>
                                    <h3><?php echo htmlspecialchars($proj['titulo']); ?></h3>
                                    <p><?php echo htmlspecialchars($proj['descricao']); ?></p>
                                </div>
                                <div class="tech-tags">
                                    <?php foreach ($proj['tecnologias'] as $tech): ?>
                                        <span class="tag"><?php echo htmlspecialchars($tech); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if (isset($projetosAutorais) && is_array($projetosAutorais)): ?>
                        <?php foreach ($projetosAutorais as $projAutoral): ?>
                            <div class="project-card" data-category="<?php echo isset($projAutoral['categoria']) ? htmlspecialchars($projAutoral['categoria']) : 'front-end'; ?>">
                                <div>
                                    <h3><?php echo htmlspecialchars($projAutoral['titulo']); ?></h3>
                                    <p><?php echo htmlspecialchars($projAutoral['descricao']); ?></p>
                                </div>
                                <div class="tech-tags">
                                    <?php foreach ($projAutoral['tecnologias'] as $techAutoral): ?>
                                        <span class="tag"><?php echo htmlspecialchars($techAutoral); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </section>
        </div>

        <div class="bloco-pagina">
            <div class="sistema-espiral">
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
                <div class="conjunto-argola"><div class="argola-metalica"></div><div class="furo-papel"></div></div>
            </div>
            <section id="contato" class="folha-caderno">
                <h2 class="section-title">Área de Contato</h2>
                <div class="contato-container">
                    <form action="index.php?action=contato" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" id="nome" name="nome" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail para retorno</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Sua mensagem</label>
                            <textarea id="mensagem" name="mensagem" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn-submit">Enviar Mensagem (WhatsApp)</button>
                    </form>
                </div>
            </section>
        </div>

    </main>

    <footer class="contador-cliques">
        <p>Interação com o portfólio: <span id="numCliques">0</span> 🌟</p>
    </footer>

    <div class="player-icone-gatilho" id="playerGatilho"></div>

    <div class="janela-player esconde-player" id="janelaMvPlayer">
        <div class="barra-superior">
            <span class="titulo-phoning">📺 NewJeans Player</span>
            <div class="botoes-janela">
                <span class="botao-controle" id="btnFecharPlayer">✕</span> 
                <span class="botao-controle">─</span> 
                <span class="botao-controle">⬜</span>
            </div>
        </div>
        
        <div class="container-video-embed">
            <iframe id="videoIframe" src="https://www.youtube.com/embed/js1CtxSY38I?enablejsapi=1" title="NewJeans Player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div class="menu-playlist" id="listaPlaylistGeral"></div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
