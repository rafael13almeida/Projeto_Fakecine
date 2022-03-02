<?php

require "Conexao.php";

class FilmesRepositoryPDO 
{

    private $conexao;

    public function __construct()
    {
      $this->conexao = Conexao::criar();
    }

    public function listarTodos():array {

        $filmesLista = array();
        $sql = "SELECT * FROM filmes";
        $filmes = $this->conexao->query($sql);
        while ($filme = $filmes->fetchObject()) {
          array_push($filmesLista, $filme);
        }
        return $filmesLista;
    }

    public function salvar($filme):bool {

      $sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) 
        VALUES (:titulo, :poster, :sinopse, :nota)";
        $stmd = $this->conexao->prepare($sql);
        $stmd->bindValue(':titulo', $filme->titulo, PDO::PARAM_STR) ;
        $stmd->bindValue(':sinopse', $filme->sinopse, PDO::PARAM_STR);
        $stmd->bindValue(':nota', $filme->nota, PDO::PARAM_STR);
        $stmd->bindValue(':poster', $filme->poster, PDO::PARAM_STR) ;
        
        return $stmd->execute();
    }
}