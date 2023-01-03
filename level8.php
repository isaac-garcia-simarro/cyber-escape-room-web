<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass"] != 'Street'){
      header("Location: level7.php?err_pass=PASS_REQUIRED");
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Level 8</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body oncontextmenu="return false;">
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 8</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <p></p>
        <form name="level8" method="post" action="level9.php">
          <input type="hidden" name="The password is" value="nAm€">  
          <input type="password" class="input" name="pass" placeholder="Password (required)" required><span class="error"><?php echo $_GET['err_pass'];?></span><br><br><br>
            <input class="button" type="submit" value="Enter">
        </form>
    </div>
  </body>
</html>