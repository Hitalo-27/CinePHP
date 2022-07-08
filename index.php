<?php

$rota = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];

require "./controller/FilmesController.php";

switch ($rota) {
    case "/":
        require "view/galeria.php";
        break;
    case "/novo":
        if ($method == "GET") require "view/cadastrar.php";
        if ($method == "POST") {
            $controller = new FilmesController();
            $controller->save($_REQUEST);
        };
        break;
    default:
        require "view/404.php";
        break;
}
