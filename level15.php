<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass"] != 'and_the_number'){
      header("Location: level14.php?err_pass=Error");
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Final Level</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Final Level</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <p>You have reached the last level, if you manage to pass it, you will get the street number to be able to inform the authorities and you will have earned our respect.</p>
        <p>
            <strong>Hint:</strong> First of all, you will have to find out what the following code means:<br/><br/>
            Lv0->2, Lv13->4, Lv9->4, Lv14->12, L0->6, L11->3, L13->4<br/><br/>
            Then, you have to use Caesar cipher with D = 3, to get the password.
        </p>
        <form name="level15" method="post" action="last.php">
            <input type="password" class="input" name="pass" placeholder="Password (required)" required><span class="error"><?php echo $_GET['err_pass'];?></span><br><br><br>
            <input class="button" type="submit" value="Enter">
        </form>
    </div>
  </body>
</html>