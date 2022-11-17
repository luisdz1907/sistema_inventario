<?php
//CONTROLADORES
 require_once 'controllers/templateController.php';
 require_once 'controllers/usuarioController.php';


//  MODELOS
require_once 'models/usuarioModel.php';

require_once 'views/includes/debug.php';

$router = new Template();
$router -> ctrTemplate();

