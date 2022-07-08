<?php

$db = new SQLite3("./database/filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($db->exec($sql)) 
    echo "\ntabela filmes apagada\n";

$sql = "CREATE TABLE filmes(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(2,1)
    )
";

if ($db->exec($sql)) 
    echo "\ntabela filmes criada\n";
else
    echo "\nerro ao criar tabela filmes\n";


$sql = "INSERT INTO filmes (id,titulo,poster,sinopse,nota) VALUES (
        0,
        'Vingadores',
        'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/d6jUbQj4E4R5MJlFYfdzANEZbkL.jpg',
        'Homem de Ferro, Thor, Hulk e os Vingadores se unem para combater seu inimigo mais poderoso, o maligno Thanos. Em uma missão para coletar todas as seis pedras infinitas, Thanos planeja usá-las para infligir sua vontade maléfica sobre a realidade.',
        8.6
    )";

if ($db->exec($sql)) 
echo "\nfilmes inseridos com sucesso\n";
else
echo "\nerro ao inserir filmes\n";

$sql = "INSERT INTO filmes (id,titulo,poster,sinopse,nota) VALUES (
    1,
    'The Boys',
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/mY7SeH4HFFxW1hiI6cWuwCRKptN.jpg',
    'Na trama, conhecemos um mundo em que super-heróis são as maiores celebridades do planeta, e rotineiramente abusam dos seus poderes ao invés de os usarem para o bem.',
    8.6
)";

if ($db->exec($sql)) 
echo "\nfilmes inseridos com sucesso\n";
else
echo "\nerro ao inserir filmes\n";

?>