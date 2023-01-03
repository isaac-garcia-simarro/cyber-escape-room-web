<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php?err_pass=Error");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass"] != 'deserve'){
      header("Location: level15.php?err_pass=Error");
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Congratulations</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Congratulations</div>
    <div id="contenido">

        <div class="center"><img class="img-big" src="imagenes/hacked.png" /></div>
        <p>You have hacked the system and the last key is <span class="big">54</span></p>
    </div>
  </body>
</html>