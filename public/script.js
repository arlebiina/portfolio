document.addEventListener('DOMContentLoaded', () => {
    // 1. ALTERNAR MODO HACKER
    const btnToggleModo = document.getElementById('btnToggleModo');
    if (btnToggleModo) {
        btnToggleModo.addEventListener('click', () => {
            document.body.classList.toggle('modo-hacker');
            if (document.body.classList.contains('modo-hacker')) {
                btnToggleModo.textContent = '🤖 Modo Normal';
            } else {
                btnToggleModo.textContent = '🤖 Modo Hacker';
            }
        });
    }

    // 2. CONTADOR DE CLIQUES NO RODAPÉ
    const numCliques = document.getElementById('numCliques');
    let cliques = 0;
    document.addEventListener('click', (e) => {
        // Não conta se clicar em botões ou links para não atrapalhar
        if (!e.target.closest('button') && !e.target.closest('a')) {
            cliques++;
            if (numCliques) numCliques.textContent = cliques;
        }
    });

    // 3. JANELA DO PLAYER DE MÚSICA
    const playerGatilho = document.getElementById('playerGatilho');
    const janelaMvPlayer = document.getElementById('janelaMvPlayer');
    const btnFecharPlayer = document.getElementById('btnFecharPlayer');

    if (playerGatilho && janelaMvPlayer) {
        playerGatilho.addEventListener('click', () => {
            janelaMvPlayer.classList.remove('esconde-player');
        });
    }

    if (btnFecharPlayer && janelaMvPlayer) {
        btnFecharPlayer.addEventListener('click', () => {
            janelaMvPlayer.classList.add('esconde-player');
        });
    }
});
