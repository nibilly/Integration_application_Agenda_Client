<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Nouvel événement
        </title>
        <link href="styles.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <h1>Formulaire de création d'un événement</h1>
        <!--This form will send an event with just a text for the moment-->
        <form action="post_new_event.php" method="post">
            <p>Text de l'event : <input type="text" name="text" /></p>
            <p><input type="submit" value="OK"></p>
        </form>
        <br>
        <a href="index.php">Accueil</a>
    </body>
</html>
