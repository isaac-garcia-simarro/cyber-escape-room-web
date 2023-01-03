<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass"] != 'vladimir'){
      header("Location: level12.php?err_pass=Error");
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Level 13</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 13</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <p>
            <strong>Hint: </strong> You must use the telnet successor to remotely connect to the server and get the name of the street where Chema is.<br/>
            The Server has the IP 10.2.1.254 and the credentials that you need to connect has been obtained in the last two levels.
        </p>
        <form name="level13" method="post" action="level14.php">
            <input type="password" class="input" name="pass" placeholder="Password (required)" required><span class="error"><?php echo $_GET['err_pass'];?></span><br><br><br>
            <input class="button" type="submit" value="Enter">
        </form>
    </div>
  </body>
</html>
