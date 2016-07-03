<!-- Este arquivo recebe todas as requisições-->
<?php
$controller = $_GET['controller'];
$action = $_GET['action'];
/* incluindo um arquivo controller com a extensão ex: PostsControllers */
include "controllers/".$controller.".php";
$instanciaController = new $controller();
$instanciaController->$action();
