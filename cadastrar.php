<?php include "cabecalho.php" ?>

<body>
  <!-- Cabeçalho !-->
  <nav class="nav-extended blue-grey lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
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
  <!-- Formulário !-->
  <div class="row">
    <form action="inserirFilme.php" method="POST">
      <div class="col s6 offset-s3">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Cadastrar Filme</span>
            <div class="row">
              <!--input do titulo!-->
              <div class="input-field col s12">
                <input id="titulo" type="text" class="validate" name="titulo" required>
                <label for="titulo">Título do Filme</label>
              </div>
            </div>
            <!--Text area!-->
            <div class="row">
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="sinopse" class="materialize-textarea" name="sinopse"></textarea>
                  <label for="sinopse">Sinopse</label>
                </div>
              </div>
            </div>
            <div class="row">
              <!--input do Nota!-->
              <div class="input-field col s4">
                <input id="titulo" type="number" step=".1" min="1" max="10" class="validate" name="nota" required>
                <label for="titulo">Nota</label>
              </div>
            </div>
            <!-- Input Capa!-->
              <div class="file-field input-field">
                <div class="btn blue-grey darken-3">
                  <span>Capa</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" name="poster">
                </div>
              </div>
          </div>
          <div class="card-action">
            <!--botoes!-->
            <a href="galeria.php" class="waves-effect waves-light btn grey">Cancelar</a>
            <button type="submit" class="waves-effect waves-light btn blue-grey darken-3">Cadastrar</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>