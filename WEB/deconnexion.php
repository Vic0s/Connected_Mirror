<?php
    session_start();
    require "./connect.php";
    $login=$_POST["Deco"];
    ///////////////// DCONNEXION ////////////////////////
    $sql_check = $db->prepare('UPDATE credentials SET verif_con = 0 where login=?');
    $sql_check->execute([$login]);
    header('Location: ./index.php');
?>
