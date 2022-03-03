<?php

$bd = new SQLite3("filmes.db"); //criando o banco de dados

$sql = "ALTER TABLE filmes ADD COLUMN favorito INT DEFAULT 0";
if ($bd->exec($sql))
    echo "\nTabela filmes alterada com sucesso\n";
else
    echo "\nErro ao alterar a tabela filmes\n";
