<?php include "cabecalho.php" ?>

<?php
session_start();
require "./repository/FilmesRepositoryPDO.php";
require "./util/Mensagem.php";

$filmesRepository = new FilmesRepositoryPDO();
$filmes = $filmesRepository->listarTodos();


?>

<body>
  <nav class="nav-extended blue-grey lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="/">Galeria</a></li>
        <li><a href="/novo">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>FAKECINE</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent blue-grey darken-3">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <!-- Filme !-->
      <?php foreach($filmes as $filme) : ?>
        <div class="col s12 m6 l3">
          <div class="card hoverable">
            <div class="card-image">
              <img src="<?php echo $filme->poster; ?>">
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
            </div>
            <div class="card-content">
              <p class="valign-wrapper">
                <i class="material-icons amber-text">star</i> <?php echo $filme->nota; ?>
              </p>
              <span class="card-title "><?php echo $filme->titulo; ?></span>
              <p><?php echo $filme->sinopse; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <?= Mensagem::mostrar(); ?>
</body>
</html>