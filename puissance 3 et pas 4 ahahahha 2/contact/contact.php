<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<?php
    require "/Applications/MAMP/htdocs/github/puisssance4/puissance 3 et pas 4 ahahahha 2/view/header.inc.php";
    ?>
    <header>
        <div class="image1">
        <p>NOUS CONTACTER</p>
        </div>
    </header>
    <main>
        <div id="icone">
            <div class="tel">
                <div class="reptel"><p>☏</p></div>
                <p>06 05 04 03 02</p>
            </div>
            <div class="tel">
                <div class="reptel"><p>📧</p></div>
                <p id="suport">support@powerofmemory.com</p>
            </div>
            <div class="tel">
                <div class="reptel"><p>📍</p></div>
                <p>Paris</p>
            </div>
        </div>
        <div id="formu">
            <div id="nom">
                <div id="divInputNom">
                    <input id="inputNom"type="text" placeholder="Nom">
                </div>
                <div id="divInputEmail">
                    <input id="inputMail"type="text"placeholder="Email">
                </div>
                
                </div>
                <div id="divInputSujet">
                    <input id="inputSujet"type="text" placeholder="Sujet">
                </div>
            <div id="divInputMessage">
                <input id="inputMessage"type="text" placeholder="Message">
            </div>
            <button id="envoyer">Envoyer</button>
            
        </div>
    </main>
    <?php
    require "/Applications/MAMP/htdocs/github/puisssance4/puissance 3 et pas 4 ahahahha 2/view/footer.inc.php";
    ?>
</body>
</html>