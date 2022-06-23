<!DOCTYPE html>
<html>
<head>
<title>Profiles</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link href="./style.css" rel="stylesheet" type="text/css">
<link href="./calendar.css" rel="stylesheet" type="text/css">
</head>
<body>
   <p>Sélection de profiles</p>
<?php
   session_start();
   require "./connect.php";
/////////////// CALENDAR ///////////////
include 'Calendar.php';
$calendar = new Calendar('2022-06-23');
$calendar->add_event('ORAL_ARDUINO', '2022-06-24', 1, 'green');
$calendar->add_event('Retour_entreprise', '2022-06-25', 2, 'red');
$calendar->add_event('Vacances', '2022-06-30', 7);
    /////////// AFFICHAGE //////////////////////////////////
    $verif_con=1;
    $sql_data = $db->prepare('SELECT login FROM credentials where verif_con=?');
    $sql_data->execute([$verif_con]);
    $login_sql = $sql_data->fetchAll();

foreach ($login_sql as $login_data) {
    $login = $login_data['login'];
}

$sql_display = $db->prepare('SELECT nom,prenom,âge,taille FROM data where login=?');
$sql_display->execute([$login]);
$results_data = $sql_display->fetchAll();

foreach ($results_data as $result_data) {
    $nom = $result_data['nom'];
    $prenom = $result_data['prenom'];
    $age = $result_data['âge'];
    $taille = $result_data['taille'];
    echo "Bienvenue : ".$nom."  ".$prenom."<br>";
    echo "Vous faîtes : ".$age."  ".$taille."<br>";
}
?>
<iframe id="widget_autocomplete_preview"  width="500" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/490070"> </iframe>
<div style="text-align:center;padding:1em 0;"> <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/fr/city/2988507"><span style="color:gray;">Heure actuelle</span><br />Paris, France</a></h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=fr&size=medium&timezone=Europe%2FParis" width="100%" height="150" frameborder="0" seamless></iframe> </div>
<div class="content home">
<?=$calendar?>
</div>
<form action="deconnexion.php" method="post">
<input type="hidden" name="Deco" class="btn btn-danger" value="<?php echo $login; ?>">
<p><input type="submit" value="Deconnexion"></p>
</form>
</body>
</html>
