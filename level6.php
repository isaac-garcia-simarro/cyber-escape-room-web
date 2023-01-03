<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass"] != 'Madrid'){
      header("Location: level5.php?err_pass=Error&pass=in");
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Level 6</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 6</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <p><strong>Hint:</strong> A good hacker would know how to analyze the code to find deficiencies or the missing part to be able to go to the next level.</p>
        <form name="level6" method="post">
            <input type="hidden" name="pass6"><br>

            <input class="button" type="submit" value="Enter">
        </form>
    </div>
  </body>
</html>
