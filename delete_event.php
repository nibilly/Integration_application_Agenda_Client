<?php
session_start();
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Agenda/api/user/".$_SESSION["userId"]."/event/".$_POST["eventId"]);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
$response = curl_exec($curl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_close($curl);
$url = "Location: http://localhost/agenda/agenda.php";
header($url); # retour accueil auto

