<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Raiz do servidor htdocs
$raizSrv = '/home/vol5_7/infinityfree.com/if0_42351799/maria-portfcode.talk4fun.net/htdocs';

// CORREÇÃO: Incluindo as subpastas corretas que o diagnóstico encontrou
require_once $raizSrv . '/src/models/Projeto.php';
require_once $raizSrv . '/src/controllers/PortfolioController.php';

$controller = new PortfolioController();

// Captura a ação da URL
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action === 'contato') {
    $controller->enviarContato();
} else {
    $controller->index();
}
?>
