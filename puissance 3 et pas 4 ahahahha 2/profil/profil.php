<?php
$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=databaseprojet', $user, $pass);

if(isset($_POST['submit']) ){
    $mdp = htmlspecialchars($_POST['mot-de-passe']);
    $confmdp = htmlspecialchars($_POST['conf-mdp']);
    $email = htmlspecialchars($_POST['email']);
    $newemail = htmlspecialchars($_POST['newemail']);
   
    $regexMail = "/^([a-zA-Z0-9.]+@+[a-zA-Z]+(.)+[a-zA-Z]{2,3})$/";
    $regexMdp = "/^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.\W).{8,}$/";


    //La partie ou lon modifie uniquemement le mail

    if(!empty($email) AND !empty($mdp)){

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
            
            // $recupid est une string il faut la convertir en int;

            echo gettype($recupid);

            
            $verifMdp = $dbh->prepare("SELECT mdp FROM inscription WHERE id = ?");
            $verifMdp->execute([$recupid]);
            $affichagetabmdp = $verifMdp->fetch();
            $affichagemdp = $affichagetabmdp[3];

            echo $affichagemdp;

            if($affichagemdp == $mdp){

                $updateEmail = $dbh->prepare('UPDATE inscription SET Usermail = ? WHERE id = ?');
                $updateEmail->execute([$newemail,$recupid]);

            }

        }

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
    <?php
    require "/Applications/MAMP/htdocs/github/puisssance4/puissance 3 et pas 4 ahahahha 2/view/footer.inc.php";
    ?>
</body>
</html>