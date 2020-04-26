<?php
function getEvent()
{

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://lt-6th75s2:8080/Agenda_war1758325854154887186/event");
    $response = curl_exec($curl);


    $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    $header_string = substr($response, 0, $header_size);
    $body = substr($response, $header_size);
    echo $body;
    curl_close($curl);
}
?>
<!DOCTYPE html>
<html lang="fr">
<body>
Event : <?php getEvent();?>
<br>
<a href="formulaire.php">Post</a>
</body>
</html>