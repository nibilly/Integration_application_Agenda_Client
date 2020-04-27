<?php
# Send a new event
function postEvent()
{
    $text = htmlspecialchars($_POST['text']);
    echo $text;
    /*$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Agenda/api/event");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($_POST));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded'
    ));
    # curl_setopt($curl, CURLOPT_HEADER, 1);

    $response = curl_exec($curl);
    $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    $body = substr($response, $header_size);
    echo "<br>".$body;
    curl_close($curl);*/
    header("Location: http://localhost/agenda?new_event=true"); # retour accueil auto
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Envoie
        </title>
        <link href="styles.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <h1>Envoie du formulaire</h1>
        <?php postEvent();?>
        <br>
        <a href="index.php">Accueil</a>
    </body>
</html>
