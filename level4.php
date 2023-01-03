<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass"] != 'hidden'){
      header("Location: level3.php?err_pass=Error");
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Level 4</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 4</div>
    <div id="contenido">

      <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
      <form name="level4" method="post" action="level5.php"">
        <input type="text" class="input" name="pass" value="?pass=in">
        <span class="error"><?php echo $_GET['err_pass'];?></span>
      </form>  
      <br>
    </div>
  </body>
</html>
