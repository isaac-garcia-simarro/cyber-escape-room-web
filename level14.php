<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["err_pass"])){
  header("Location: level0.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["pass"] != 'ZURBAN0'){
      header("Location: level13.php?err_pass=Error");
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Escape Room - Level 14</title>
    <script src=js/scipt.js ></script>
    <script>
      function check_pass(){
        if(document.getElementById("pass").value == num){
          document.getElementById('level14').submit();
        }else{
          document.getElementById('error').innerHTML = "Error";
          return false;
        }
      }
    </script>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="marquee">
    ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это ты никогда не найдешь это
    </div>
    <div class="center black">  </div>
    <div class="center border title">Level 14</div>
    <div id="contenido">

        <div class="center"><img class="img-small" src="imagenes/candado.jpg" /></div>
        <form id="level14" name="level14" method="post" action="level15.php" onsubmit="return false;">
            <input type="password" class="input" id="pass" name="pass" placeholder="Password (required)" required><span id="error" class="error"><?php echo $_GET['err_pass'];?></span><br><br><br>
            <button class="button" onclick="check_pass()">Enter</button>
        </form>
    </div>
  </body>
</html>
