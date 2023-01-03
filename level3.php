<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass2"] != 'is'){
      header("Location: level2.php?err_pass=Error");
      exit();
    }
}
  ?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Level 3</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 3</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <form name="level3" id="level3" method="post" action="level4.php" onsubmit="return false;">
            <input type="password" class="input" name="pass" value="hidden"><br><br><br>
        </form>
        <button class="button button3" onclick="document.getElementById('level3').submit();">Enter</button>
    </div>
  </body>
</html>
