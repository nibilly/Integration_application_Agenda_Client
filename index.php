<?php
# Get all events
function getEvents()
{
    echo "01/12/2020 de 10H00 à 12H00 : Droit <br>01/12/2020 de 13H30 à 15H30 : Com";
    /*$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Agenda/api/event");
    $response = curl_exec($curl);
    $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    $header_string = substr($response, 0, $header_size);
    $body = substr($response, $header_size);
    echo $body;
    curl_close($curl);*/
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Accueil
        </title>
        <link href="styles.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <a href="index.php" style="text-decoration:none"><h1>Accueil</h1></a>

        <?php if(isset($_GET['new_event']))echo "Nouvel événement créé avec succès<br><br>"?>

        Evénements : <br>
        <?php getEvents();?>
        <br>
        <a href="new_event.php">Créer un nouvel événement</a>
    </body>
</html>