<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass"] != '192.168.66.11'){
      header("Location: level10.php?err_pass=Error");
      exit();
    }
}
?>
<html lang="">
  <head>
    <title>Escape Room - Level 11</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    Пароль Россия Пароль Россия Пароль Россия Пароль Россия Пароль Россия Пароль Россия Пароль Россия Пароль Россия
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 11</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <p></p>
        <form name="level11" method="post" action="level12.php">
            <p><strong>Hint:</strong> Don't you notice something different on the web?</p>
            <input type="password" class="input" name="pass" placeholder="Password (required)" required><span class="error"><?php echo $_GET['err_pass'];?></span><br><br><br>
            <input class="button" type="submit" value="Enter">
        </form>
    </div>
  </body>
</html>