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
    require "/Applications/MAMP/htdocs/github/puisssance4/puissance 3 et pas 4 ahahahha 2/view/header.inc.php";
    ?>
    <div class="fond1 h1">
    <h1 class="h1">CONNEXION</h1>
    </div>

    <section class="formBlock">

        <form action="post" class="form">

            <input class="mail" type="email" placeholder="Email" maxlength="30">
            <input class="mdp" type="password" placeholder="Mot de passe">
            <input class="bouton2" type="submit" value="Connexion">
        </form>

    </section>
    <?php
    require "/Applications/MAMP/htdocs/github/puisssance4/puissance 3 et pas 4 ahahahha 2/view/footer.inc.php";
    ?>
</body>
</html>