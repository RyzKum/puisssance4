<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<?php

    
    $user = "root";
    $pass = "root";
    $dbh = new PDO('mysql:host=localhost;dbname=databaseprojet', $user, $pass);


    if(isset($_POST['submit']) ){
        if(!empty($_POST['email']) AND !empty($_POST['mot-de-passe'])){

            
            $email = htmlspecialchars($_POST['email']);
            $mdp = htmlspecialchars($_POST['mot-de-passe']);



            // echo"$email";
            // echo"$mdp";
          
            // $insertUser = $dbh->prepare('');
            // $insertUser-> execute(array($email,$pseudo));

            $sth = $dbh->prepare('SELECT *
                FROM inscription
                WHERE Usermail = ?  AND mdp = ?');

            $sth->execute([$email, $mdp]);

            $affichage = $sth->fetch();
            // print_r($affichage);die();





                    
        }
        else{
            echo 'Veuillez remplir les champs demandés';
        }
    }
        
    

    ?>
    <nav class="haut">
        <div>
        <p id="montitre">The Power Of Memory</p>
        </div>
        <div class="acc">
            <a class="headerBtn" href="../puissance 3 et pas 4 ahahahha 2/index.html">ACCUEIL</a>
            <a class="headerBtn" href="../inscription/index.html">S'INSCRIRE</a>
            <a class="headerBtn" href="../login/index.html">SCORES</a>
            <a class="headerBtn" href="../../puissance 3 et pas 4 ahahahha 2/contact/contact.html">CONTACTER</a>
        </div>  
    </nav>

    <div class="fond1 h1">
    <h1 class="h1">CONNEXION</h1>
    </div>

    <section class="formBlock">

        <form method="POST" action="" class="form">

            <input class="mail" type="email" placeholder="Email" maxlength="30" name = "email">
            <input class="mdp" type="password" placeholder="Mot de passe" name="mot-de-passe">
            <input class="bouton2" type="submit"  name="submit" value="Connexion">
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