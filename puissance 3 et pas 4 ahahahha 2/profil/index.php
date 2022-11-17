<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'basep4';

$mysqli = @new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);

if ($mysqli->connect_error) {
  echo 'Errno: '.$mysqli->connect_errno;
  echo '<br>';
  echo 'Error: '.$mysqli->connect_error;
  exit();
}

echo 'Success: A proper connection to MySQL was made.';
echo '<br>';
echo 'Host information: '.$mysqli->host_info;
echo '<br>';
echo 'Protocol version: '.$mysqli->protocol_version;

$mysqli->close();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="haut">
        <div>
        <p id="montitre">The Power Of Memory</p>
        </div>
        <div class="acc">
        <a class="headerBtn" href="../puissance 3 et pas 4 ahahahha 2/index.php">ACCUEIL</a>
            <a class="headerBtn" href="../inscription/index.php">S'INSCRIRE</a>
            <a class="headerBtn" href="../login/index.php">SCORES</a>
            <a class="headerBtn" href="../../puissance 3 et pas 4 ahahahha 2/contact/contact.php">CONTACTER</a>
        </div>  
    </nav>

    
    <div class="fond1 h1">
        <img class="proo" src="asset/end1.png" alt=""><p class="myman">PROFILE VERY COOL AND SWAG</p>
    </div>



    <section class="formBlock">
        <form action="post" class="form">
            <p class="text12">Souhaitez vous changer d'email ?</p>
            <input class="mail" type="email" placeholder="Ancien Email" maxlength="30">
            <input class="mdp" type="email" placeholder="Nouveau Email">
            <input class="mdp" type="password" placeholder="Mot de passe">
            <input class="mdp" type="password" placeholder="Confirmer Mot de passe">
            <input class="bouton2" type="submit" value="Confirmer">
        </form>
        <form action="post" class="form1">
            <p class="text12">Souhaitez vous changer de mot de passe ?</p>
            <input class="mail" type="password" placeholder="Ancien Mot de passe" maxlength="30">
            <input class="mdp" type="password" placeholder="Nouveau Mot de passe">
            <input class="mdp" type="password" placeholder="Confirmer Mot de passe">
            <input class="bouton2" type="submit" value="Confirmer">
        </form>

    </section>

    <section class="ses5">
        <footer>
            <div id="footerPart1">
                <div id="info">
                    <p>Information</p>
                    <p>Quisque commodo facilisis purus, interdum volutpat arcu viverra sed</p>
                    <p><span class="infoOrange">Tel : </span><span class="tex"> 05 04 03 02</p>
                    <p><span class="infoOrange">Email :</span> support@powerofmemory.com</p>
                    <p><span class="infoOrange">Location : </span>Paris</p>
                    <div id="reseau">
                        <div class="logoOrange"><img src="../puissance 3 et pas 4 ahahahha 2/asset/Google__G__Logo.svg.png" class="tailleImage"></img></div>
                        <div class="logoOrange"><img src="../puissance 3 et pas 4 ahahahha 2/asset/twit.jpeg" class="tailleImage"></img></div>
                        <div class="logoOrange"><img src="../puissance 3 et pas 4 ahahahha 2/asset/logo-facebook.png" class="tailleImage"></img></div>
                        <div class="logoOrange"><img src="../puissance 3 et pas 4 ahahahha 2/asset/pint.png" class="tailleImage"></img></div>
                        <div class="logoOrange"><img src="../puissance 3 et pas 4 ahahahha 2/asset/logo-instagram.png" class="tailleImage"></img></div>
                    </div>
                </div>
    
                <div id="power">
                    <p>Power Of Memory</p>
                    <p><span class="pointOrange">▪</span> <a class="loot" href="../login/index.html">Jouer ! </a> </p>
                    <p><span class="pointOrange">▪</span> <a class="loot" href="../login/index.html">Les scores</a></p>
                    <p><span class="pointOrange">▪</span> <a class="loot" href="../../puissance 3 et pas 4 ahahahha 2/contact/contact.html">Nous contacter </a></p>
    
                </div>
            </div>
    
            <div id="footerPart2">
                <p id="copyRight">Copyright © 2022 Tous droits réservés</p>
            </div>
        </footer>

        <a class="gotopbtn" href="#"><i class="fa-solid fa-angle-up"></i></a>


</body>
</html>