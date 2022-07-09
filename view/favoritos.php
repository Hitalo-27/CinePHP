<?php include "components/cabecalho.php" ?>

<?php

if (!isset($_SESSION)) {
    session_start();
}

?>

<body>

    <nav class="nav-extended teal lighten-1">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="/">Galeria</a></li>
                <li><a href="/novo">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CinePHP</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent teal darken-4">
                <li class="tab"><a href="/">Todos</a></li>
                <li class="tab"><a class="active" href="/favoritos">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <h1>Favoritos</h1>
        </div>
    </div>
</body>

</html>