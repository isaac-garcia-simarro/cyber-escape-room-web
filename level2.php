<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass"] != 'Chema'){
      header("Location: level1.php?err_pass=Error");
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Level 2</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <script src="js/script.js"></script>
  </head>
  <body onload="_2()">
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 2</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <form name="level2" method="post" action="level3.php">
            <input type="password" class="input" name="pass" id="pass_seed"><br>
            <input type="password" class="input" name="pass2" placeholder="Password (required)" required>
            <span class="error"><?php echo $_GET['err_pass'];?></span><br><br><br>

            <input class="button" type="submit" value="Enter">
        </form>
    </div>
  </body>
</html>
