<?php
include '../../Model/TravelOffer.php';
include '../../config.php';
class TravelOfferController
{
    public function showTravelOffer($offer)
    {
        $offer->show();
    }

    public function listOffre()
    {
        $sql = "SELECT * FROM traveloffer";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}