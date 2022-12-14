<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php
require "../view/header.inc.php";
?>
<?php
    
    $user = "root";
    $pass = "root";
    $dbh = new PDO('mysql:host=localhost;dbname=databaseprojet', $user, $pass);


    if(isset($_POST['submit']) ){
        if(!empty($_POST['email']) AND !empty($_POST['pseudo']) AND !empty($_POST['mot-de-passe'])){

            
            $email = htmlspecialchars($_POST['email']);
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = htmlspecialchars($_POST['mot-de-passe']);
            $confmdp = htmlspecialchars($_POST['conf-mdp']);
            $dateInscri = date('d/m/Y h:i:s');
           
            $regex = "/^([a-zA-Z0-9.]+@+[a-zA-Z]+(.)+[a-zA-Z]{2,3})$/";
            $regexMdp = "/^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.\W).{8,}$/";

            

            // if(preg_match($regexMdp, $mdp)){
            //     echo 'sa marche';
            // }else{
            //     echo'ca marche pas';
            // }

            //if (isset($_POST['mot-de-passe'])){
               // if (preg_match("#^[a-zA-Z0-9#]+$#", $mdp, $matches)){
                   // echo "mdp valide";
            
               // }
            
               // else{
                 //   echo "mdp non valide";
              //  }
                
           // }

           if (!preg_match('/[a-z]/', $mdp) || !preg_match('/[A-Z]/', $mdp) || !preg_match('/\d/', $mdp) || !preg_match('/[^a-zA-Z\d]/', $mdp))
            {
            echo "Le mot de passer doit contenir au moins une minuscule, une majuscule, un chiffre et un caractère spécial";
        }



            if(strlen($pseudo) < 4){
                echo'Pseudo trop court 4 min';
            }else{

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    if($mdp == $confmdp ){
                        if (strlen($mdp) < 8) {
                            echo'Le mot de passe doit faire au minimum 8 caractères';
                        }else{
                            
                            $insertUser = $dbh->prepare('INSERT INTO inscription(Usermail,Pseudo,mdp,dateIncri) VALUES (?,?,?,?)');
                            $insertUser-> execute(array($email,$pseudo,$mdp,$dateInscri));
                        }
                    
        
                    }
                    else{
                        echo'mot de passe différent';
                    }
    
                } else {
                    echo "C'est une adresse mail non valide";
                }
            }
            
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
            <?php
             require "../inscription/register.php";
             ?>
            <input class="mdp" type="password" placeholder="Confirmer le mot de passe" name = "conf-mdp">
            <input class="bouton2" type="submit" value="Inscription" name="submit">
    
        </form>

    </section>
    <?php
    require "../view/footer.inc.php";
    ?>
</body>
</html>