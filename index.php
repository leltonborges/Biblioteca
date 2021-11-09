<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
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
                                <li><a class="dropdown-item" href="?page=biblioteca-cadastrar">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=biblioteca-listar">Listar</a></li>
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
        include("config.php");

        switch ($_GET["page"]) {
                //biblioteca
            case "biblioteca-listar":
                include("pages/biblioteca-listar.php");
                break;
            case "biblioteca-cadastrar":
                include("pages/biblioteca-cadastrar.php");
                break;
            case "biblioteca-editar":
                include("pages/biblioteca-editar.php");
                break;
            case "biblioteca-salvar":
                include("pages/biblioteca-salvar.php");
                break;
                //atendente
            case "atendente-listar":
                include("pages/atendente-listar.php");
                break;
            case "atendente-cadastrar":
                include("pages/atendente-cadastrar.php");
                break;
            case "atendente-editar":
                include("pages/atendente-editar.php");
                break;
            case "atendente-salvar":
                include("pages/atendente-salvar.php");
                break;
                //usuario
            case "usuario-listar":
                include("pages/usuario-listar.php");
                break;
            case "usuario-cadastrar":
                include("pages/usuario-cadastrar.php");
                break;
            case "usuario-editar":
                include("pages/usuario-editar.php");
                break;
            case "usuario-salvar":
                include("pages/usuario-salvar.php");
                break;
                //categoria
            case "categoria-listar":
                include("pages/categoria-listar.php");
                break;
            case "categoria-cadastrar":
                include("pages/categoria-cadastrar.php");
                break;
            case "categoria-editar":
                include("pages/categoria-editar.php");
                break;
            case "categoria-salvar":
                include("pages/categoria-salvar.php");
                break;
                //livro
            case "livro-listar":
                include("pages/livro-listar.php");
                break;
            case "livro-cadastrar":
                include("pages/livro-cadastrar.php");
                break;
            case "livro-editar":
                include("pages/livro-editar.php");
                break;
            case "livro-salvar":
                include("pages/livro-salvar.php");
                break;
                //reserva
            case "reserva-listar":
                include("pages/reserva-listar.php");
                break;
            case "reserva-cadastrar":
                include("pages/reserva-cadastrar.php");
                break;
            case "reserva-editar":
                include("pages/reserva-editar.php");
                break;
            case "reserva-salvar":
                include("pages/reserva-salvar.php");
                break;

            default:
                include("pages/main.php");
                break;
        }
        ?>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/events.js"></script>
</body>

</html>