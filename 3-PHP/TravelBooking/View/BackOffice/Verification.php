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
$travelController = new TravelOfferController();
/*var_dump($offer);
$travelController->showTravelOffer($offer);*/
$travelController->addOffer($offer);
header("Location: offerList.php");
?>