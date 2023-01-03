<?php
if (($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["err_pass"]) && $_GET["pass"] != 'in') || ($_SERVER["REQUEST_METHOD"] == "POST")) {
  header("Location: level4.php?err_pass=GET_PARAM_REQUIRED");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"]) && !isset($_GET["pass"])){
  header("Location: level0.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Level 5</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 5</div>
    <div id="contenido">

      <div class="center"><img class="img-small" src="imagenes/retiro.jpeg" /></div>
      <form name="level5" method="post" action="level6.php"">
        <p><strong>Hint:</strong> Where is it?</p>
        <input type="password" class="input" name="pass" placeholder="Password (required)" required>
        <span class="error"><?php echo $_GET['err_pass'];?></span><br><br><br>

        <input class="button" type="submit" value="Enter">
      </form>  
      <br>
    </div>
  </body>
</html>
