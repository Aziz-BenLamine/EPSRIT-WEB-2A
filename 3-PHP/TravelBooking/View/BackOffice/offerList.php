<?php
include "../../Controller/TravelOfferController.php";
$travelController = new TravelOfferController();
$list = $travelController->listOffre();

echo "<table border='1'>
        <tr>
            <th>Title</th>
            <th>Destination</th>
            <th>Departure Date</th>
            <th>Return Date</th>
            <th>Price</th>
            <th>Disponibility</th>
            <th>Category</th>
        </tr>";

foreach ($list as $row) {
    $id = $row['id'];
    $titre = $row['titre'];
    $destination = $row['destination'];
    $date_depart = $row['date_depart'];
    $date_retour = $row['date_retour'];
    $prix = $row['prix'];
    $disponible = $row['disponible'];
    $categorie = $row['categorie'];

    echo "<tr>
            <td>{$titre}</td>
            <td>{$destination}</td>
            <td>{$date_depart}</td>
            <td>{$date_retour}</td>
            <td>{$prix}</td>
            <td>{$disponible}</td>
            <td>{$categorie}</td>
          </tr>";
}
echo "</table>";