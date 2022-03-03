<?php

$bd = new SQLite3("filmes.db"); //criando o banco de dados

$sql = "DROP TABLE IF EXISTS filmes"; //se já existir, apague a tabela filmes
if ($bd->exec($sql))
echo "\nTabela filmes apagada\n";

//criando uma tabela
$sql = "CREATE TABLE filmes (   
        id INTEGER PRIMARY KEY AUTOINCREMENT, 
        titulo VARCHAR (200) NOT NULL,
        poster VARCHAR (200),
        sinopse TEXT(500),
        nota DECIMAL(2,1)
        )
";
if ($bd->exec($sql)) 
    echo "\nTabela filmes criada\n";
else
    echo "\nErro ao criar tabela filmes\n";

//inserindo filmes



if ($bd->exec($sql))
echo "\nFilmes inseridos com sucesso\n";
else
echo "\nErro ao inserir filmes\n".$bd->lastErrorMsg();




