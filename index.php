<?php
/*
 * Requêtes
@GET
public Response getUser(@FormParam("firstName") String firstName, @FormParam("lastName") String lastName);

@POST
public Response postUser(@FormParam("firstName") String firstName, @FormParam("lastName") String lastName);

@POST
@Path("{userId}")
public Response postAgenda(@PathParam("userId") int userId);

@DELETE
@Path("{userId}")
public Response deleteAgenda(@PathParam("userId") int userId);

@GET
@Path("{userId}/event")
public Response getEvents(@PathParam("userId") int userId);

@POST
@Path("{userId}/event")
public Response postEvent(@PathParam("userId") int userId, @FormParam("startDate") String startDate,
	@FormParam("finishDate") String finishDate, @FormParam("name") String name);

@GET
@Path("{userId}/event/day")
public Response getEventByDay(@PathParam("userId") int userId, @QueryParam("date") String date);

@DELETE
@Path("{userId}/event/{eventId}")
public Response deleteEvent(@PathParam("userId") int userId, @PathParam("eventId") int eventId);
 */
function getEvents()
{
    # echo "01/12/2020 de 10H00 à 12H00 : Droit <br>01/12/2020 de 13H30 à 15H30 : Com";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Agenda/api/event");
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
    <head>
        <title>
            Accueil
        </title>
        <link href="styles.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <a href="index.php" style="text-decoration:none"><h1>Accueil</h1></a>

        <?php if(isset($_GET['new_event']))echo "Nouvel événement créé avec succès<br><br>"?>

        Evénements : <br>
        <?php getEvents();?>
        <br>
        <a href="new_event.php">Créer un nouvel événement</a>
    </body>
</html>