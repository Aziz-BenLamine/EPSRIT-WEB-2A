<?php
include '../../Model/TravelOffer.php';

$offer = new TravelOffer(1, "Balouchi", "Ariana", "01/02/2016", "02/03/2016", 100, true, "Drama");
var_dump($offer);
$offer->show();
?>