document.addEventListener("DOMContentLoaded", function () {
    // 1. CONTADOR DE CLIQUES
    let totalCliques = 0;
    const elementoContador = document.getElementById("contador-rodape");

    document.body.addEventListener("click", function () {
        totalCliques++;
        if (elementoContador) {
            elementoContador.textContent = `Interação com o portfólio: ${totalCliques} 🌟`;
        }
    });

    // 2. FILTROS DA GRID DE PROJETOS
    const botoesFiltro = document.querySelectorAll(".btn-filtro");
    const cardsProjetos = document.querySelectorAll(".project-card-link");

    botoesFiltro.forEach(botao => {
        botao.addEventListener("click", function (e) {
            e.stopPropagation();
            
            botoesFiltro.forEach(b => b.classList.remove("ativo"));
            this.classList.add("ativo");

            const filtroDefinido = this.getAttribute("data-filter");

            cardsProjetos.forEach(card => {
                const techCard = card.getAttribute("data-tech");
                if (filtroDefinido === "all" || techCard === filtroDefinido) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });
});
