<?php
session_start();
function getEvents()
{
    if(isset($_SESSION['userId'])) {
        date_default_timezone_set("Europe/Paris");
        $query = http_build_query(["date" => date('d-m-Y H\Hi')]);
        $url = "http://localhost:8080/Agenda/api/user/".$_SESSION['userId']."/event/day?".$query;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($curl);
    echo $response;
        curl_close($curl);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Accueil
        </title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="agenda.css" rel="stylesheet" media="all" type="text/css">
    </head>

    <body>
        <div id="accueil">
            <div id="agenda">
                <a href="index.php" style="text-decoration:none">
                    <h1>Accueil</h1></a>
                    <p> Nous sommes le <strong>
                            <?php date_default_timezone_set("Europe/Paris");
                            echo date('d-m-Y H\Hi'); ?>
                        </strong></p>

                <?php if(isset($_GET['new_event']))echo "Nouvel événement créé avec succès<br><br>"?>
                <?php if(isset($_GET['new_user']))echo "Nouvel utilisateur ajouté !<br><br>"?>

               <h2> Emploi du temps du jour </h2>
               <br>
                 <div id="events">

                 <?php getEvents();?>
                </div>
                <br>
                <button class=" button" id="buttonevent" onclick="window.location.href = 'new_event.php';"> Nouvel événement</button> <br/>
                <button class=" button" onclick="window.location.href = 'agenda.php';"> Agenda complet </button>
             </div>
            <div id="utilisateur">

                <form action="get_user_id.php" method="post">
                    <fieldset>
                        <legend>Connectez-vous</legend>
                        <label for="prenom">Prenom </label>
                        <input id="prenom" type="text" name="firstName"><br>

                        <label for="nom">Nom </label>
                        <input id="nom" type="text" name="lastName"><br>
                    </fieldset>
                    <p><input class="button" type="submit" value="Connexion"></p>
                    
                 </form>
                <button class=" button" onclick="window.location.href = 'new_user.php';"> Nouvel utilisateur </button>
            </div>
        </div>
    </body>
</html>