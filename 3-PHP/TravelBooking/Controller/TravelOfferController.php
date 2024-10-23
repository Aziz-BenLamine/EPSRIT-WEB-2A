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

    public function addOffer($offer)
    {
        $sql = "INSERT INTO traveloffer (titre, destination, date_depart, date_retour, prix, disponible, categorie) VALUES (:titre, :destination, :date_depart, :date_retour, :prix, :disponible, :categorie)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'titre' => $offer->getTitre(),
                'destination' => $offer->getDestination(),
                'date_depart' => $offer->getDateDepart(),
                'date_retour' => $offer->getDateRetour(),
                'prix' => $offer->getPrix(),
                'disponible' => $offer->getDisponible(),
                'categorie' => $offer->getCategorie()
            ]);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}