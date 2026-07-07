<?php
class PortfolioController {
    public function index() {
        // Busca os dados das listas de projetos no Model
        $projetosDestaque = Projeto::getProjetosDestaque();
        $projetosAutorais = Projeto::getProjetosAutorais();
       
        // Renderiza a visualização principal passando as variáveis
        require_once __DIR__ . '/../views/home.php';
    }

    public function enviarContato() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $mensagem = htmlspecialchars($_POST['mensagem']);
           
            // Mensagem estruturada para o WhatsApp
            $textoWhats = urlencode("Olá! Meu nome é $nome ($email). Vim através do seu Portfólio MVC. Mensagem: $mensagem");
           
            // SUBSTITUA ABAIXO PELO SEU NÚMERO REAL DO WHATSAPP (Com código do país e DDD)
            $numeroWhats = "5534999861586";
           
            // Redireciona para o WhatsApp cumprindo o requisito de integração real
            header("Location: https://api.whatsapp.com/send?phone=$numeroWhats&text=$textoWhats");
            exit;
        }
    }
}
?>
