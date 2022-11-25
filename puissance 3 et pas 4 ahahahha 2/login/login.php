<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <?php


    $user = "root";
    $pass = "root";
    $dbh = new PDO('mysql:host=localhost;dbname=databaseprojet', $user, $pass);


    if (isset($_POST['submit'])) {
        if (!empty($_POST['email']) and !empty($_POST['mot-de-passe'])) {


            $email = htmlspecialchars($_POST['email']);
            $mdp = htmlspecialchars($_POST['mot-de-passe']);


            $sth = $dbh->prepare('SELECT *
                FROM inscription
                WHERE Usermail = ?  AND mdp = ?');

            $sth->execute([$email, $mdp]);

            $affichage = $sth->fetch();

            if (gettype($affichage) == "boolean") {
                echo '<p id="phpInscri">Veuillez vous inscrire</p>';
            }

            if (gettype($affichage) == "array") {

                echo '<p id="phpConnect">Connection profil</p>';
                header('Location: http://puissance4/puisssance4/puissance%203%20et%20pas%204%20ahahahha%202/profil/profil.php');
                exit();
                //header('Location: http://localhost:8888/puisssance4/puissance%203%20et%20pas%204%20ahahahha%202/profil/profil.php');
                //exit();
            }

        } else {
            echo 'Veuillez remplir les champs demandés';
        }
    }



    ?>
    <header>
        <?php
        require "../view/header.inc.php";
        ?>
    </header>

    <div class="fond1 h1">
        <h1 class="h1">CONNEXION</h1>
    </div>

    <section class="formBlock">

        <form method="POST" action="" class="form">

            <input class="mail" type="email" placeholder="Email" maxlength="30" name="email">
            <input class="mdp" type="password" placeholder="Mot de passe" name="mot-de-passe">
            <input class="bouton2" type="submit" name="submit" value="Connexion"  href="../accueil/accueil.php">
        </form>
       
    </section>

    <section class="ses5">
        

        <a class="gotopbtn" href="#"><i class="fa-solid fa-angle-up"></i></a>

        <?php
    require "../view/footer.inc.php";
    ?>
</body>

</html>