<?php include "cabecalho.php" ?>

<?php

$bd = new SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);

$filme1 = [
    "titulo" => "Encanto",
    "nota" => 9.8,
    "poster" => "https://www.themoviedb.org/t/p/w300/zAC6fCnaOHMpPFpOpngTSmTDnLK.jpg"
];
$filme2 = [
    "titulo" => "Sing 2",
    "nota" => 9.1,
    "poster" => "https://www.themoviedb.org/t/p/w300/g0UPcVwhRtlLhNRowM324o7UJ1f.jpg"
];
$filme3 = [
    "titulo" => "O Rei Leão",
    "nota" => 9.9,
    "poster" => "https://www.themoviedb.org/t/p/w300/lBhAvhY1Wk36qICfrizBbat7MkP.jpg"
];
$filme4 = [
    "titulo" => "Raya e a última Codorna",
    "nota" => 9.3,
    "poster" => "https://www.themoviedb.org/t/p/w300/nFuxY9pebpnkXaZ2H06qX68eIEy.jpg"
];

//$filmes = [$filme1, $filme2, $filme3, $filme4];
?>

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
        <!-- Filme !-->
        <?php while ($filme = $filmes->fetchArray()) : ?>
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?php echo $filme["poster"]; ?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i> <?php echo $filme["nota"]; ?>
                        </p>
                        <span class="card-title "><?php echo $filme["titulo"]; ?></span>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
</body>

</html>
