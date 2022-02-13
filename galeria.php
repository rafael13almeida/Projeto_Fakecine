<?php include "cabecalho.php"?>

<body>
    <nav class="nav-extended blue-grey lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
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
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/zAC6fCnaOHMpPFpOpngTSmTDnLK.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i> 9.8
                    </p>
                    <span class="card-title ">Encanto</span>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/g0UPcVwhRtlLhNRowM324o7UJ1f.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i> 9.3
                    </p>
                    <span class="card-title ">Sing 2</span>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/lBhAvhY1Wk36qICfrizBbat7MkP.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i> 9.9
                    </p>
                    <span class="card-title ">O Rei Leão</span>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/nFuxY9pebpnkXaZ2H06qX68eIEy.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i> 8.9
                    </p>
                    <span class="card-title ">Raya</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>