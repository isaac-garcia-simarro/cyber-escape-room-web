<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Level 0</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 0</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <p>If you consider yourself a good hacker, I guess you know what one of the most used passwords is, right?</p>
        <form name="level0" method="post" action="level1.php">
            <input type="password" class="input" name="pass" placeholder="Password (required)" required><span class="error"><?php echo $_GET['err_pass'];?></span><br><br><br>

            <input class="button" type="submit" value="Enter">
        </form>
    </div>
  </body>
</html>
