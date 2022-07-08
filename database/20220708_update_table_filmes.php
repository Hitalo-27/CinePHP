<?php

$db = new SQLite3("./database/filmes.db");

$sql = "ALTER TABLE filmes ADD COLUMN favorito INT DEFAULT 0";

if ($db->exec($sql)) 
    echo "\ntabela filmes foi alterado com sucesso\n";
else
    echo "\nerro ao alterar tabela filmes\n";