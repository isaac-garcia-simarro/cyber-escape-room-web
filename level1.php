<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
    header("Location: level0.php");
    exit();
}

if (($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["pass"] != 'password')){
    header("Location: level0.php?err_pass=Error");
    exit();
}
?>
<html>
<head>
    <title>Escape Room - Level 1</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">Pass: Chema</div>
    <div class="center border title">Level 1</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <p>Hint: You shouldn't need to leave this page to get the password.</p>
        <form name="level1" method="post" action="level2.php">
            <input type="password" class="input" name="pass" placeholder="Password (required)" required>
            <span class="error"><?php echo $_GET['err_pass'];?></span><br><br><br>

            <input class="button" type="submit" value="Enter">
        </form>
    </div>
</body>
</html>
