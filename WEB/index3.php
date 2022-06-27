<?php
require "./connect.php";
$login=$_POST["Supp_con"];
$sql_update = $db->prepare('UPDATE credentials SET verif_con = 0 where login=?');
$sql_update->execute([$login]);
header('Location: ./index.php');
?>
