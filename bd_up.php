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
        nota DECIMAL(2,1)
        )
";
if ($bd->exec($sql)) 
    echo "\nTabela filmes criada\n";
else
    echo "\nErro ao criar tabela filmes\n";

//inserindo filmes
$sql = "INSERT INTO filmes (id, titulo, poster, nota) VALUES (
    0,
    'Encanto',
    'https://www.themoviedb.org/t/p/w300/zAC6fCnaOHMpPFpOpngTSmTDnLK.jpg',
    9.7
)";

if ($bd->exec($sql))
echo "\nFilmes inseridos com sucesso\n";
else
echo "\nErro ao inserir filmes\n";

$sql = "INSERT INTO filmes (id, titulo, poster, nota) VALUES (
    1,
    'Sing 2',
    'https://www.themoviedb.org/t/p/w300/g0UPcVwhRtlLhNRowM324o7UJ1f.jpg',
    9.3
)";


if ($bd->exec($sql))
echo "\nFilmes inseridos com sucesso\n";
else
echo "\nErro ao inserir filmes\n";



