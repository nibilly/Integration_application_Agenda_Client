<?php
# Get all events
function getEvents()
{
    echo "Du 02/12/2020 12H00 au 02/12/2020 14H00 : Anniversaire Charlotte <br>Du 20/12/2020 00H00 au 30/12/2020 23H59 : Vacances";
    /*$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://lt-6th75s2:8080/Agenda_war1758325854154887186/event");
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
        <h1>Accueil</h1>
        Evénements : <br>
        <?php getEvents();?>
        <br>
        <a href="new_event.php">Créer un nouvel événement</a>
    </body>
</html>