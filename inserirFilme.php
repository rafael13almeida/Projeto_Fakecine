<?php

$bd = new SQLite3("filmes.db");


$titulo   = $bd->escapeString($_POST["titulo"]) ;
$sinopse  = $bd->escapeString($_POST["sinopse"]);
$nota     = $bd->escapeString($_POST["nota"]);
$poster   = $bd->escapeString($_POST["poster"]);

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) 
        VALUES (:titulo, :poster, :sinopse, :nota)";
$stmd = $bd->prepare($sql);
$stmd->bindValue(':titulo', $titulo, SQLITE3_TEXT);
$stmd->bindValue(':sinopse', $sinopse, SQLITE3_TEXT);
$stmd->bindValue(':nota', $nota, SQLITE3_FLOAT);
$stmd->bindValue(':poster', $poster, SQLITE3_TEXT);

if ($stmd->execute())
  echo "\nFilmes inseridos com sucesso\n";
else
  echo "\nErro ao inserir filmes\n".$bd->lastErrorMsg();

header("lacation: galeria.php?msg=Filme+cadastrado+com+sucesso");
