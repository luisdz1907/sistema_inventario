<?php
//CONTROLADORES
 require_once 'controllers/templateController.php';
 require_once 'controllers/usuarioController.php';
 require_once 'controllers/categoriaController.php';
 require_once 'controllers/productoController.php';


//  MODELOS
require_once 'models/usuarioModel.php';
require_once 'models/categoriaModel.php';
require_once 'models/productoModel.php';

require_once 'views/includes/debug.php';
require_once 'views/includes/funcionesGlobales.php';

$router = new Template();
$router -> ctrTemplate();

