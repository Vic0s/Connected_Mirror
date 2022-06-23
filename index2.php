<!DOCTYPE html>
<html>
<head>
        <title>Déja connecté</title>
        <meta charset="utf-8">
</head>
<body>

      <?php
      session_start();
      require "./connect.php";
      $login_con=$_SESSION["CHECK_CONNECTION"];
      echo "L'Utilisateur ".$login_con." est déja connecté"."<br>";
      echo "Voulez vous le deconnecté ?"."<br>";
      ?>
<form action="index3.php" method="post">
<input type="hidden" name="Supp_con" value="<?php echo $login_con; ?>">
<p><input type="submit" value="Deconnexion"></p>
</form>
</body>
</html>
