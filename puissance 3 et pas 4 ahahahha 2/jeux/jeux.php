<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux</title>
    <link rel="stylesheet" href="../accueil/style.css" />
    <link rel="stylesheet" href="jeux.css"/>
</head>
<body>

    <?php
    require "../view/header.inc.php";
    ?>

<div id="remove">
        <div id="inject">
            <p id="pTheme">Themes</p>
        </div>
    </div>


<div id="jeuxGlobal">


    <div id="removeLvL">
        <div id="injectLvl">
            <p id="pThemeLvL">Level</p>
        </div>
    </div>

    <div id="removeT">
        <div id="injectTheme">
            <p id="pThemeLvL">Theme</p>
        </div>
    </div>


    <div id="removeScore">
        <div id="injectScore">
            <p id="pThemeScore">Score</p>
        </div>
    </div>


</div>

<div id="memory"></div>

    
</body>

<script src="jeux.js"></script>
</html>