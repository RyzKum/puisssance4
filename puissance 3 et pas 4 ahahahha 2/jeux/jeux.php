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

<!-- <div id="remove">
        <div id="inject">
            <p id="pTheme">Themes</p>
        </div>
    </div> -->


<div id="jeuxGlobal">


    <div id="removeLvL">
        <div id="injectLvl">
            <p id="pThemeLvL">Level</p>
        </div>
    </div>

    <div id="remove">
        <div id="inject">
            <p id="pTheme">Themes</p>
        </div>
    </div>


    <div id="removeScore">
        <div id="injectScore">
            <p id="pThemeScore">Temps</p>
            <span id="chronotime">00:00:00</span>
    <form name="chronoForm">
        <input type="button" name="startstop" value="start!" onClick="chronoStart()" />
    </form>

        </div>
    </div>


</div>

<div id="divPlay">
    <p id="recupLevel"></p>
    <p id="pPlay">Play</p>
    <p id="recupTheme"></p>
</div>

<div id="memoryPlace">
    <div class="memory" id="memory"></div>
</div>

    
</body>

<script src="jeux.js"></script>
</html>