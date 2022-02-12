<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS Materialize !-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--JS Materialize !-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Fonte para os ícones!-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Fakecine</title>
</head>

<body>
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
    <div class="row">
        <div class="col s6 offset-s3 blue-grey lighten-5">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filme</span>
                    <div class="row">
                        <!--input do titulo!-->
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" require>
                            <label for="titulo">Título do Filme</label>
                        </div>
                    </div>
                    <!--Text area!-->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <!--input do Nota!-->
                        <div class="input-field col s4">
                            <input id="titulo" type="number" step=".1" min="1" max="10" class="validate">
                            <label for="titulo">Nota</label>
                        </div>
                    </div>
                    <!-- Input Capa!-->
                    <form action="#">
                        <div class="file-field input-field">
                            <div class="btn blue-grey darken-3">
                                <span>Capa</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-action">
                    <!--botoes!-->
                    <a href="galeria.php" class="waves-effect waves-light btn grey">Cancelar</a>
                    <a href="#" class="waves-effect waves-light btn blue-grey darken-3">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>