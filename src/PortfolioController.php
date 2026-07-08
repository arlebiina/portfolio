<?php

class PortfolioController {
    
    public function index() {
        // Instancia o modelo Projeto
        $projetoModel = new Projeto();
        
        $projetosDestaque = $projetoModel->getProjetosDestaque();
        $projetosAutorais = $projetoModel->getProjetosAutorais();
        
        // CORREÇÃO: Sobe um nível e busca a home.php dentro da pasta views
        require_once __DIR__ . '/../views/home.php';
    }
    
    public function enviarContato() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
            $email = isset($_POST['email']) ? trim($_POST['email']) : '';
            $mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : '';
            
            if (!empty($nome) && !empty($mensagem)) {
                $textoWhastapp = "Olá! Meu nome é " . $nome . " (" . $email . "). " . $mensagem;
                $urlUrlencode = urlencode($textoWhastapp);
                
                // Redireciona para o WhatsApp
                header("Location: https://api.whatsapp.com/send?phone=5534999999999&text=" . $urlUrlencode);
                exit;
            }
        }
        
        header("Location: index.php");
        exit;
    }
}
?>
