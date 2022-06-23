<html>
<head>
<title>Inscription</title>
</head>
<body>
<?php
  session_start();
  require "./connect.php";
  $nom=$_POST["Nom"];
  $prenom=$_POST["Prenom"];
  $age=$_POST["Âge"];
  $taille=$_POST["Taille"];
  $login=$_POST["Login"];
  $password=$_POST["Password"];
  $verif_con = "0";

///////////////
  $sql_check = $db->prepare('SELECT login FROM credentials where login=?');
  $sql_check->execute([$login]);
  $results_check = $sql_check->fetchAll();

if(!$results_check) {

  echo "OK";
  $sql = $db->prepare('INSERT INTO data(nom,prenom,âge,taille,login) VALUES(?,?,?,?,?)');
  $sql->execute([$nom,$prenom,$age,$taille,$login]);

  $sql_cred = $db->prepare('INSERT INTO credentials(login,password,verif_con) VALUES(?,?,?)');
  $sql_cred->execute([$login,$password,$verif_con]);

  header('Location: ./index.php');
}

else {
  echo "Utilisateur déja existant";
  header('Location: ./inscription.php');
}
?>
</body>
</html>
