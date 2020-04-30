<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Nouvel utilisateur
        </title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="agenda.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <h1>Création d'un nouvel utilisateur</h1>
       
        <form id="newuser"action="post_new_user.php" method="post">
            <label for="newprenom">Prenom </label>
            <input id="newprenom" type="text" name="firstName"><br>

            <label for="newnom">Nom </label>
            <input id="newnom" type="text" name="lastName"><br>
            <p><input class="button" id="creer" type="submit" value="Création"></p>
        </form>
        <br>
        <a href="index.php">Accueil</a>
    </body>
</html>