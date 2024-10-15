<?php
include "../../Controller/TravelOfferController.php";
$disponible = isset($_POST["Availability"]) ? "1" : "0";
$offer = new TravelOffer(
    1,
    $_POST["title"],
    $_POST["destination"],
    $_POST["Departure"],
    $_POST["Return"],
    $_POST["price"],
    $disponible,
    $_POST["Category"]
);
var_dump($offer);
$travelController = new TravelOfferController();
$travelController->showTravelOffer($offer);
?>