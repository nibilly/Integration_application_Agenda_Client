<?php
function postEvent()
{
    $text = htmlspecialchars($_POST['text']);
    echo $text;
    #$curl = curl_init();
    #curl_setopt($curl, CURLOPT_URL, "http://lt-6th75s2:8080/Agenda_war1758325854154887186/event");
    #curl_setopt($curl, CURLOPT_POST, 1);
    #curl_setopt($curl, CURLOPT_POSTFIELDS, $text);
    #$response = curl_exec($curl);
    #curl_close($curl);
}
?>
<!DOCTYPE html>
<html lang="fr">
Post
<?php postEvent();?>
<br>
<a href="index.php">Home</a>
</html>
