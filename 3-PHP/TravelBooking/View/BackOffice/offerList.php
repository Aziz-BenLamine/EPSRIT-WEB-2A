<?php
include "../../Controller/TravelOfferController.php";
$travelController = new TravelOfferController();
$list = $travelController->listOffre();
foreach ($list as $row) {
    $offer = new TravelOffer($row['id'], $row['titre'], $row['destination'], $row['date_depart'], $row['date_retour'], $row['prix'], $row['disponible'], $row['categorie']);
    $offer->show();
}




