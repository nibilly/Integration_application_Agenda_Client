<?php
# Send a new event
function postEvent()
{
    $text = htmlspecialchars($_POST['text']);
    echo $text;
    /*$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://lt-6th75s2:8080/Agenda_war1758325854154887186/event");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $text);
    $response = curl_exec($curl);
    curl_close($curl);*/
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
