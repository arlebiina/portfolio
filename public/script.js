document.addEventListener('DOMContentLoaded', function() {
    
    // 1. COMPORTAMENTO DA NAVBAR
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 40) {
            navbar.classList.add('rolou');
        } else {
            navbar.classList.remove('rolou');
        }
    });

    // 2. CONTADOR DE CLIQUES
    let totalCliques = 0;
    const campoContador = document.getElementById('numCliques');
   
    document.body.addEventListener('click', function() {
        totalCliques++;
        if (campoContador) {
            campoContador.textContent = totalCliques;
        }
    });

    // 3. OBSERVER DO CADERNO
    const folhas = document.querySelectorAll('.folha-caderno');
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.08
    };

    const folhaObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('folha-visivel');
            }
        });
    }, observerOptions);

    folhas.forEach(folha => {
        folhaObserver.observe(folha);
    });

    // 4. TRILHA DE MOUSE (COELHINHOS)
    document.addEventListener('mousemove', (e) => {
        if (Math.random() > 0.15) return;

        const particula = document.createElement('div');
        particula.className = 'particula-trilha';
        particula.textContent = '🐰🩷⭐🫧🌼';
        particula.style.left = e.clientX + 'px';
        particula.style.top = e.clientY + 'px';
        
        const mdx = (Math.random() - 0.5) * 60;
        particula.style.setProperty('--mdx', mdx + 'px');
        
        document.body.appendChild(particula);
        
        setTimeout(() => {
            particula.remove();
        }, 800);
    });

    // 5. ALTERNÂNCIA DE MODO (TEMA HACKER / VINTAGE)
    const btnToggle = document.getElementById('btnToggleModo');
    const body = document.body;

    if (localStorage.getItem('tema') === 'hacker') {
        body.classList.add('modo-hacker');
        if (btnToggle) btnToggle.textContent = '🔮 Modo Vintage';
    }

    if (btnToggle) {
        btnToggle.addEventListener('click', () => {
            body.classList.toggle('modo-hacker');
            if (body.classList.contains('modo-hacker')) {
                localStorage.setItem('tema', 'hacker');
                btnToggle.textContent = '🔮 Modo Vintage';
            } else {
                localStorage.setItem('tema', 'tokking');
                btnToggle.textContent = '🤖 Modo Hacker';
            }
        });
    }

    // 6. LÓGICA DO PLAYER INTERATIVO PIP (ESTILO PIP DO YOUTUBE)
    const gatilhoIcone = document.getElementById('playerGatilho');
    const janelaMv = document.getElementById('janelaMvPlayer');
    const btnFechar = document.getElementById('btnFecharPlayer');

    if (gatilhoIcone && janelaMv) {
        gatilhoIcone.addEventListener('click', (e) => {
            e.stopPropagation();
            janelaMv.classList.toggle('esconde-player');
        });
    }

    if (btnFechar && janelaMv) {
        btnFechar.addEventListener('click', (e) => {
            e.stopPropagation();
            janelaMv.classList.add('esconde-player'); 
        });
    }

    renderizarPlaylist();
});

/* ==========================================================================
   SISTEMA DA PLAYLIST
   ========================================================================== */
const musicasBase = [
    { id: "m1", titulo: "Attention", url: "https://www.youtube.com/embed/js1CtxSY38I" },
    { id: "m2", titulo: "Hype Boy", url: "https://www.youtube.com/embed/S4UEJePR0UE" },
    { id: "m3", titulo: "Cookie", url: "https://www.youtube.com/embed/VOmIplFAGeg" },
    { id: "m4", titulo: "Ditto", url: "https://www.youtube.com/embed/pSUydWEqKwE" },
    { id: "m10", titulo: "GODS (Worlds Live)", url: "https://www.youtube.com/embed/uiz7EsMPsuw" }
];

let musicaAtivaId = "m1";

function renderizarPlaylist() {
    const listaPlaylistGeral = document.getElementById('listaPlaylistGeral');
    if (!listaPlaylistGeral) return;

    listaPlaylistGeral.innerHTML = "";

    musicasBase.forEach(musica => {
        const classeAtiva = musica.id === musicaAtivaId ? "ativa" : "";

        // MODIFICAÇÃO: Removido o onclick em texto para usar data attributes seguros
        const itemHTML = `
            <div class="musica-wrapper ${classeAtiva}" data-id="${musica.id}" data-url="${musica.url}">
                <span class="musica-item">🎵 NewJeans - ${musica.titulo}</span>
            </div>
        `;
        listaPlaylistGeral.insertAdjacentHTML('beforeend', itemHTML);
    });

    // MODIFICAÇÃO: Atribuição dos cliques diretamente através dos elementos criados
    document.querySelectorAll('.musica-wrapper').forEach(item => {
        item.addEventListener('click', function() {
            const url = this.getAttribute('data-url');
            const id = this.getAttribute('data-id');
            tocarMusica(url, id);
        });
    });
}

function tocarMusica(url, id) {
    const videoIframe = document.getElementById('videoIframe');
    if (videoIframe) {
        musicaAtivaId = id;
        videoIframe.src = url + "?enablejsapi=1&autoplay=1";
        renderizarPlaylist();
    }
}
