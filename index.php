<!DOCTYPE html>
<html>
    <head>
        <title>TS1</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <?php $hits= 0 ?>
    </head>
    <body>
        <div id="activity">
                <?php echo '<h1> Teoria de Sistemas </h1>'; ?> 
                <h1 id="counter">Has presionado la barra <span class="hits">0</span> veces.</h1>
                <a href="#" onclick="resetHits()" class="tryagain">Reestablecer</a>
        </div>
        <script src="script.js"></script>
    </body>
</html>