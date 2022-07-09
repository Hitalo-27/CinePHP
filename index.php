<?php

$rota = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];

require "./controller/FilmesController.php";

if ($rota === "/") {
    require "view/galeria.php";
    exit();
}

if ($rota === "/novo") {
    if ($method == "GET") require "view/cadastrar.php";
    if ($method == "POST") {
        $controller = new FilmesController();
        $controller->save($_REQUEST);
    };
    exit();
}

if ($rota === "/favoritos") {
    require "view/favoritos.php";
    exit();
}

if (substr($rota, 0, strlen("/favoritar")) === "/favoritar") {
    $controller = new FilmesController();
    $controller->favorite(basename($rota));
    exit();
}

if (substr($rota, 0, strlen("/filmes")) === "/filmes") {
    if ($method == "GET") require "view/galeria.php";
    if ($method == "DELETE") {
        $controller = new FilmesController();
        $controller->delete(basename($rota));
    }
    exit();
}

require "view/404.php";
