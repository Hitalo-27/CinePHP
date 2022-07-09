<?php include "components/cabecalho.php" ?>

<?php

if (!isset($_SESSION)) {
    session_start();
}

require "./components/Mensagem.php";

$controller = new FilmesController();
$filmes = $controller->index();

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
                <li class="tab"><a class="active" href="/">Todos</a></li>
                <li class="tab"><a href="/favoritos">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php foreach ($filmes as $filme) : ?>
                <div class="col s7 m4 l4 xl3">
                    <div class="card hoverable card-serie grey darken-4">
                        <div class="card-image">
                            <img src="<?= $filme->poster ?>" class="activator" />
                            <button class="btn-fav btn-floating halfway-fab waves-effect waves-light teal darken-4" data-id="<?= $filme->id ?>">
                                <i class="material-icons"><?= ($filme->favorito) ? "favorite" : "favorite_border" ?></i>
                            </button>
                        </div>
                        <div class="card-content">
                            <p class="valign-wrapper white-text">
                                <i class="material-icons amber-text">star</i> <?= $filme->nota ?>
                            </p>
                            <span class="card-title activator truncate white-text">
                                <?= $filme->titulo ?>
                            </span>
                        </div>
                        <div class="card-reveal grey darken-4">
                            <span class="card-title white-text text-darken-4"><?= $filme->titulo ?><i class="material-icons right">close</i></span>
                            <p class="white-text"><?= substr($filme->sinopse, 0, 500) . "..." ?></p>
                            <button class="waves-effect waves-light btn-small right red accent-2 btn-delete" data-id="<?= $filme->id ?>"><i class="material-icons">delete</i></button>

                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <?= Mensagem::mostrar(); ?>

    <script>
        document.querySelectorAll(".btn-fav").forEach((btn) => {
            btn.addEventListener("click", (e) => {
                const id = btn.getAttribute("data-id");
                fetch(`/favoritar/${id}`)
                    .then(response => response.json()
                        .then(response => {
                            if (response.success === "ok") {
                                if (btn.querySelector("i").innerHTML === "favorite") {
                                    btn.querySelector("i").innerHTML = "favorite_border"
                                } else {
                                    btn.querySelector("i").innerHTML = "favorite"
                                }
                            }
                        }))
                    .catch(error => {
                        M.toast({
                            html: 'Erro ao favoritar'
                        })
                    })
            });
        });


        document.querySelectorAll(".btn-delete").forEach((btn) => {
            btn.addEventListener("click", (e) => {
                const id = btn.getAttribute("data-id");
                const requestConfig = {
                    method: "DELETE",
                    headers: new Headers()
                }
                fetch(`/filmes/${id}`, requestConfig)
                    .then(response => response.json()
                        .then(response => {
                            if (response.success === "ok") {
                                const cardDelete = btn.closest(".col");
                                cardDelete.classList.add("fadeOut");
                                setTimeout(() => cardDelete.remove(), 1000);
                            }
                        }))
                    .catch(error => {
                        M.toast({
                            html: 'Erro ao apagar'
                        })
                    })
            });
        });
    </script>
</body>

</html>