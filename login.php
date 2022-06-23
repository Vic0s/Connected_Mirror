<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        <?php
            session_start();
            require "./connect.php";
            $login=$_POST["Login"];
            $password=$_POST["Password"];
            //Obtention des credentials

            ///////////// VERIFICATION DOUBLON CONNEXION ///////////////
            $Verif_con = 1;
            $sql_check = $db->prepare('SELECT login,verif_con FROM credentials where verif_con=?');
            $sql_check->execute([$Verif_con]);
            $results_check = $sql_check->fetchAll();
            ///////////// AUTHENTIFICATION /////////////////////////
            $sql = $db->prepare('SELECT login,password FROM credentials');
            $sql->execute();
            $results = $sql->fetchAll();

if(!$results_check) {
        echo "OK";

              foreach ($results as $result) {

                $login_sql = $result['login'];
                $password_sql = $result['password'];

                    if($login==$login_sql && $password==$password_sql) {
                        $sql_update = $db->prepare('UPDATE credentials SET verif_con = 1 where login=?');
                        $sql_update->execute([$login]);
                        $_SESSION["login"]=$login;
                        header('Location: ./profile.php');
                            }
                        }
                    }

foreach ($results_check as $result_check) {

              $login_con = $result_check['login'];
              $token = $result_check['verif_con'];
              if($login==$login_con) {
                $_SESSION["login"]=$login_con;
                header('Location: ./profile.php');
              }
              else {
                $_SESSION["CHECK_CONNECTION"]=$login_con;
                header('Location: ./index2.php');
              }
          }
            /////////////////////// AUTHENTIFICATION //////////////////////////



        ?>
    </body>
</html>
