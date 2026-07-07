<?php
// Inicializa o roteamento simples do padrão MVC
require_once __DIR__ . '/../src/models/Projeto.php';
require_once __DIR__ . '/../src/controllers/PortfolioController.php';

$controller = new PortfolioController();

// Captura a ação da URL. Se não houver, a padrão é a home
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action === 'contato') {
    $controller->enviarContato();
} else {
    $controller->index();
}
?>

