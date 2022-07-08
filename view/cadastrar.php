<?php include "components/cabecalho.php" ?>

<body>

    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li class="active"><a href="/novo">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CinePHP</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent purple darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <form method="POST" enctype="multipart/form-data">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Filme</span>

                        <!-- Input Titulo -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Titulo do Filme</label>
                            </div>
                        </div>

                        <!-- Input sinopse -->
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea" name="sinopse" required></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </div>

                        <!-- Input Nota -->
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="nota" type="number" step=".1" min=0 max=10 class="validate" name="nota" required>
                                <label for="nota">Nota</label>
                            </div>
                        </div>

                        <!-- Input Capa do Filme -->
                        <div class="file-field input-field">
                            <div class="btn purple lighten-1">
                                <span>Capa</span>
                                <input type="file" name="poster_file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="poster">
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="input-field col s12">
                                <input id="poster" type="text" class="validate" name="poster" required>
                                <label for="poster">Capa</label>
                            </div>
                        </div> -->


                    </div>
                    <div class="card-action">
                        <a class="waves-effect waves-light btn grey" href="/">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light btn purple">Cadastrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>