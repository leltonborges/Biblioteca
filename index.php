<?php
include("config.php");
$path = @$_GET["page"];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>WEB</title>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BRD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">BRD</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1
                            pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown" aria-labelledby="navbarDropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Biblioteca</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=biblioteca-listar">Listar</a></li>
                                <li><a class="dropdown-item" href="?page=biblioteca-cadastrar">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" aria-labelledby="navbarDropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Atendente</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=atendente-listar">Listar</a></li>
                                <li><a class="dropdown-item" href="?page=atendente-cadastrar">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" aria-labelledby="navbarDropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Livros</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=livro-listar">Listar</a></li>
                                <li><a class="dropdown-item" href="?page=livro-cadastrar">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" aria-labelledby="navbarDropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=categoria-listar">Listar</a></li>
                                <li><a class="dropdown-item" href="?page=categoria-cadastrar">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" aria-labelledby="navbarDropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Reservas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=reserva-listar">Listar</a></li>
                                <li><a class="dropdown-item" href="?page=reserva-cadastrar">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" aria-labelledby="navbarDropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Usários</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=usuario-listar">Listar</a></li>
                                <li><a class="dropdown-item" href="?page=usuario-cadastrar">Cadastrar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="menu">
    </div>
    <section class="container">
        <?php
        if(isset($path)){
            include("pages/$path.php");
        }else{
            include("pages/main.php");
        }
        ?>
    </section>

    <script src="js/jquery-3.6.0.min.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
    <script src="js/events.js"></script>
</body>

</html>