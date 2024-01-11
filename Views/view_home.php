<h1>Bienvenue dans notre librairie</h1>
<?php
if (isset($authentification[0]->nom)){

    
$_SESSION["nom"]=$authentification[0]->nom;

    echo $_SESSION["nom"];
   
    ?>
<script>window.location.href="?=controller=session&action=utilisateur"</script>
<?php
}



?>