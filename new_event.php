<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Nouvel événement
        </title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="agenda.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <h1>Formulaire de création d'un événement</h1>
        <!--This form will send an event with just a text for the moment-->
        <form id="newevent" action="post_new_event.php" method="post">
            <label for="eventName"> Nom de l'évenement</label>
            <input type="text" id="eventName" name="name"/><br>
            <label for="Date"> Date de début (31-12-2020 13H30)</label>
            <input type="text" id="Date" name="startDate"/><br><br>
            <label for="endHour"> Date de fin (31-12-2020 15H30)</label>
            <input type="text" id="endHour" name="finishDate"/><br>
            <input class="button" type="submit" value="Création">
        </form>
        <br>
        <a href="index.php">Accueil</a>
    </body>
</html>
