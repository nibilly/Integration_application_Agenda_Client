<?php
session_start();
function getEvents()
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Agenda/api/user/".$_SESSION['userId']."/event");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl);
    echo $response;
    curl_close($curl);
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Agenda
        </title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="agenda.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <div id="lol">
            
                <a href="index.php" style="text-decoration:none">
                    <h1>Agenda Complet</h1></a>
                    
    <hr />
    <form action="delete_event.php" method="post">
        <label style="width: auto"> Id de l'événement à supprimer </label>
        <input type="text" id="eventId" name="eventId"/>

        <input class="button" type="submit" value="Supprimer" style="height: ">
    </form>
    <div class="agenda">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Evenement</th>
                    </tr>
                </thead>
                <tbody>
                <?php getEvents();?>
                </tbody>
            </table>
        </div>
    </div>
</div>


                <a href="index.php">Accueil </a>
            
        </div>
    </body>
</html>