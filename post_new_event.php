<?php
session_start();
# Send a new event
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Agenda/api/user/".$_SESSION['userId']."/event");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($_POST));
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded'
));
curl_exec($curl);
curl_close($curl);
$url = "Location: http://localhost/agenda?new_event=true";
header($url); # retour accueil auto



