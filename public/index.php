<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Bramus\Router\Router;
use App\Controllers\AuthController;
use App\Controllers\TradeLicenseController;
use App\Middleware\AuthMiddleware;

$router = new Router();

// Public routes
$router->get('/', function() {
    require_once __DIR__ . '/../src/Views/home.php';
});

$router->get('/home', function() {
    require_once __DIR__ . '/../src/Views/home.php';
});

$router->get('/login', [new AuthController(), 'showLoginForm']);
$router->post('/login', [new AuthController(), 'login']);
$router->get('/register', [new AuthController(), 'showRegisterForm']);
$router->post('/register', [new AuthController(), 'register']);


$router->before('GET|POST', '/(dashboard|create_trade|trade_search|trade_preview|storetrade|editTrade|updateTrade|trade_search).*', function() {
    AuthMiddleware::handle();
});


$router->post('/storetrade', [new TradeLicenseController(), 'save']);

$router->get('/dashboard', function() {
    require_once __DIR__ . '/../src/Views/dashboard.php';
});

$router->get('/create_trade', function() {
    require_once __DIR__ . '/../src/Views/create_trade.php';
});

$router->get('/trade_search', function() {
    require_once __DIR__ . '/../src/Views/trade_search.php';
});




$router->get('/editTrade', [new TradeLicenseController(), 'showEditForm']);
$router->get('/trade_search', [new TradeLicenseController(), 'showsearchform']);
$router->post('/updateTrade', [new TradeLicenseController(), 'update']);
$router->post('/search_form', [new TradeLicenseController(), 'search_form']);
$router->get('/trade_preview', [new TradeLicenseController(), 'showPreview']);

$router->get('/logout', [new AuthController(), 'logout']);

// Run the router
$router->run();
