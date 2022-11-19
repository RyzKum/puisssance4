<?php
$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=databaseprojet', $user, $pass);

//La partie ou lon modifie uniquemement le mail

if(isset($_POST['submit']) ){
    $mdp = htmlspecialchars($_POST['mot-de-passe']);
    // $confmdp = htmlspecialchars($_POST['conf-mdp']);
    $email = htmlspecialchars($_POST['email']);
    $newemail = htmlspecialchars($_POST['newemail']);
    $confmdp = htmlspecialchars($_POST['confMdp']);
    $regexMail = "/^([a-zA-Z0-9.]+@+[a-zA-Z]+(.)+[a-zA-Z]{2,3})$/";
    $regexMdp = "/^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.\W).{8,}$/";

    

    if(!empty($email) AND !empty($mdp) AND !empty($newemail) AND !empty($confmdp)){

        $email = htmlspecialchars($_POST['email']);
        $mdp = htmlspecialchars($_POST['mot-de-passe']);

        //Check si la base à un mail qui corespond au mdp tape 

        $sth = $dbh->prepare('SELECT *
            FROM inscription
            WHERE Usermail = ?  AND mdp = ?');

        $sth->execute([$email, $mdp]);

        $affichage = $sth->fetch();

        if(gettype($affichage)== "boolean"){
            echo 'Veuillez vous inscrire';
        }

        if(gettype($affichage)== "array"){

            $verifEmail = $dbh->prepare('SELECT id FROM inscription WHERE Usermail = ?');
            $verifEmail->execute([$email]);
            $affichage = $verifEmail->fetch();
            $recupid = $affichage[0];
            $recupidInt = intval($recupid);

            $verifMdp = $dbh->prepare("SELECT mdp FROM inscription WHERE id = ?");
            $verifMdp->execute([$recupidInt]);
            $affichagetabmdp = $verifMdp->fetch();


            $affichagemdp = $affichagetabmdp[0];


            if($affichagemdp == $mdp){

                if($mdp == $confmdp){

                    $updateEmail = $dbh->prepare('UPDATE inscription SET Usermail = ? WHERE id = ?');
                    $updateEmail->execute([$newemail,$recupid]);

                }
                else{
                    echo'<p class="phpConfMdp">Veuillez confirmer votre mot de passe<p>';
                }



            }

        }

    }
    else {
        echo '<p class="phpConfMdp">Veuillez insérer les champs demandés<p>';
    }

}

// Partie changement de mot de passe

if(isset($_POST['sub']) ){

    $emailMdp = htmlspecialchars($_POST['mailMdp']);
    $oldMdp = htmlspecialchars($_POST['oldMpd']);
    $changeMdp = htmlspecialchars($_POST['changeMdp']);
    

    $regexMail = "/^([a-zA-Z0-9.]+@+[a-zA-Z]+(.)+[a-zA-Z]{2,3})$/";
    $regexMdp = "/^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.\W).{8,}$/";



    if(!empty($emailMdp) AND !empty($oldMdp) AND !empty($changeMdp)){

        //Check si la base à un mail qui corespond au mdp tape 

        $sth = $dbh->prepare('SELECT *
            FROM inscription
            WHERE Usermail = ?  AND mdp = ?');

        $sth->execute([$emailMdp, $oldMdp]);

        $affichage = $sth->fetch();

        if(gettype($affichage)== "boolean"){
            echo 'Le mail ou l\'ancien mot de passe que vous avez tapé n\'est pas bon';
        }

        if(gettype($affichage)== "array"){

            $verifEmail = $dbh->prepare('SELECT id FROM inscription WHERE Usermail = ?');
            $verifEmail->execute([$emailMdp]);
            $affichage = $verifEmail->fetch();
            $recupid = $affichage[0];
            $recupidInt = intval($recupid);

            // La faut mettre la commande sql dupdate

            $verifMdp = $dbh->prepare("UPDATE inscription SET mdp = ? WHERE id=?;");
            $verifMdp->execute([$changeMdp,$recupidInt]);



            
            // $affichagetabmdp = $verifMdp->fetch();


            // $affichagemdp = $affichagetabmdp[0];


            // if($affichagemdp == $mdp){

            //     if($mdp == $confmdp){

            //         $updateEmail = $dbh->prepare('UPDATE inscription SET Usermail = ? WHERE id = ?');
            //         $updateEmail->execute([$newemail,$recupid]);

            //     }
            //     else{
            //         echo'<p class="phpConfMdp">Veuillez confirmer votre mot de passe<p>';
            //     };



            // }

        }

    }
    else {
        echo '<p class="phpConfMdp">Veuillez insérer les champs demandés<p>';
    }

}

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
<?php
    require "../view/header.inc.php";
    ?>
    
    <div class="fond1 h1">
        <img class="proo" src="asset/end1.png" alt=""><p class="myman">PROFILE VERY COOL AND SWAG</p>
    </div>



    <section class="formBlock">
        <form action="" class="form" method ="POST">
            <p class="text12">Souhaitez vous changer d'email ?</p>
            <input class="mail" type="email" placeholder="Ancien Email" name="email"maxlength="30">
            <input class="mdp" type="email" placeholder="Nouveau Email" name="newemail">
            <input class="mdp" type="password" placeholder="Mot de passe" name="mot-de-passe">
            <input class="mdp" type="password" placeholder="Confirmer Mot de passe" name="confMdp">
            <input class="bouton2" type="submit" value="Confirmer" name ="submit">
        </form>
        <form action="" class="form1" method ="POST">
            <p class="text12">Souhaitez vous changer de mot de passe ?</p>
            <input class="mdp" type="email" placeholder="Email" name="mailMdp">
            <input class="mail" type="password" placeholder="Ancien Mot de passe" name="oldMpd"maxlength="30">
            <input class="mdp" type="password" placeholder="Nouveau Mot de passe" name="changeMdp">
            
            <input class="bouton2" type="submit" value="Confirmer" name="sub">
        </form>

    </section>
    <?php
    require "../view/footer.inc.php";
    ?>
</body>
</html>