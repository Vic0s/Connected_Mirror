<html>
 <head>
  <title>Accueil</title>
 </head>
 <body>

 <?php
 session_start();
 echo '<p>Page de connexion</p>';
 //$User_Disconnected = $_SESSION["DECONNECTED"];
 //if (isset($User_Disconnected)) {
   //echo $User_Disconnected." : Est bien déconnecté";
 //}
 ?>
 <form action="login.php" method="post">
 <p>Votre Login : <input type="text" name="Login" /></p>
 <p>Votre Password : <input type="text" name="Password" /></p>
 <p><input type="submit" value="Connexion"></p>
</form>

<form action="inscription.php" method="post">
<p><input type="submit" value="Inscription"></p>
</form>
</body>
</html>
