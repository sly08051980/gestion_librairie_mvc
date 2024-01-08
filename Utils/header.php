<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Content/css/style.css">
    <title>Document</title>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                    <ul class="navbar-nav nav couleur">



                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="?controller=livres&action=all_livres"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Livres
                            </a>
                            <ul class="dropdown-menu couleurbleu" aria-labelledby="navbarDropdownMenuLink" >
                                <li><a class="liens" href="?controller=livres&action=all_livres">Tous les livres</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="?controller=fournisseurs&action=all_fournisseurs"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Fournisseurs
                            </a>
                            <ul class="dropdown-menu couleurbleu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="liens" href="?controller=fournisseurs&action=all_fournisseurs">Tous les
                                        Fournisseurs</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="?controller=commandes&action=all_commandes"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Commandes
                            </a>
                            <ul class="dropdown-menu couleurbleu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="liens" href="?controller=commandes&action=all_commandes">Toutes les
                                        commandes</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>






    </header>
</body>

</html>