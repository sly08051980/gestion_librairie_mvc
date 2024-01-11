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
<?php session_start(); ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav nav couleur">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="?controller=home&action=home">Accueil</a>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="?controller=livres&action=all_livres"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Livres
                            </a>
                            <ul class="dropdown-menu couleurbleu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="liens" href="?controller=livres&action=all_livres">Tous les livres</a>
                                </li>
                                <li><a class="liens" href="?controller=livres&action=all_titres">Par titre</a>
                                </li>
                                <li><a class="liens" href="?controller=livres&action=all_auteur">Par Auteur</a>
                                </li>
                                <li><a class="liens" href="?controller=livres&action=all_editeur">Par Editeur</a>
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
                                <li><a class="liens"
                                        href="?controller=fournisseurs&action=all_fournisseurs_raison_social">Raison
                                        Social</a></li>
                                <li><a class="liens"
                                        href="?controller=fournisseurs&action=all_fournisseurs_localite">Localité</a>
                                </li>
                                <li><a class="liens"
                                        href="?controller=fournisseurs&action=all_fournisseurs_pays">pays</a></li>


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
                                <li><a class="liens" href="?controller=commandes&action=all_commandes_editeurs">Commande
                                        Par editeur</a></li>
                                <li><a class="liens"
                                        href="?controller=commandes&action=all_commandes_fournisseurs">Commande Par
                                        fournisseur</a></li>
                                <li><a class="liens" href="?controller=commandes&action=all_commandes_dates">Commande
                                        Par dates</a></li>

                            </ul>
                        </li>
                        <?php
                            if (isset($_SESSION["nom"])){
                                echo  "nom : " .$_SESSION["nom"];
                                echo "<a href='?controller=home&action=home_deconnexion' class='btn btn-danger btn-link'
                                role='button'>Deconnexion</a>";
                              
                            }else{
                               
                                echo "<a href='?controller=home&action=home_connexion' class='btn btn-danger btn-link'
                                role='button'>Connexion</a>";
                            }
                        


                        ?>
                        

                    </ul>
                </div>
            </div>
        </nav>





    </header>
</body>

</html>