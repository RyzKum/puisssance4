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
    $pass = "";
    $dbh = new PDO('mysql:host=localhost;dbname=databaseprojet', $user, $pass);


    if(isset($_POST['submit']) ){
        if(!empty($_POST['email']) AND !empty($_POST['pseudo']) AND !empty($_POST['mot-de-passe'])){

            $email = htmlspecialchars($_POST['email']);
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = htmlspecialchars($_POST['mot-de-passe']);
            $dateInscri = date('d/m/Y h:i:s');
            $insertUser = $dbh->prepare('INSERT INTO inscription(Usermail,Pseudo,mdp,dateIncri) VALUES (?,?,?,?)');
            $insertUser-> execute(array($email,$pseudo,$mdp,$dateInscri));
        }
        else{
            echo 'Veuillez remplir les champs demandés';

        }
    }
    ?>
    
    <div class="fond1 h1">
    <h1 class="h1">INSCRIPTION</h1>
    </div>

    <section class="formBlock">

        <form method="POST" action="" class="form">

            <input class="mail" type="email" placeholder="Email" name= "email"maxlength="30">
            <input class="pseudo" type="text" placeholder="Pseudo" name="pseudo"maxlength="30">
            <input class="mdp" type="password" placeholder="Mot de passe" name = "mot-de-passe">
            <input class="mdp" type="password" placeholder="Confirmer le mot de passe" name = "conf-mdp">
            <input class="bouton2" type="submit" value="Inscription" name="submit">
    
        </form>

    </section>
    <?php
    
    ?>
</body>
</html>