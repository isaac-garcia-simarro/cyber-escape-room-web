<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass"] != 'in_Pc_vv1th_Ip'){
      header("Location: level9.php?err_pass=Error");
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Level 10</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 10</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <p></p>
        <form name="level10" method="post" action="level11.php">
            <p>Hint: The password is the third IP that can be assigned to a host on the second possible subnet from the next IP address<br>192.168.66.0 and the mask 255.255.255.248</p>
            <input type="password" class="input" name="pass" placeholder="Password (required)" required><span class="error"><?php echo $_GET['err_pass'];?></span><br><br><br>
            <input class="button" type="submit" value="Enter">
        </form>
    </div>
  </body>
</html>