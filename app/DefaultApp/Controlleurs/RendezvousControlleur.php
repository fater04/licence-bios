<?php

/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/28/2019
 * Time: 10:36 AM
 */

namespace app\DefaultApp\Controlleurs;

use app\DefaultApp\Models\RendezVous;
use systeme\Controlleur\Controlleur;

class RendezvousControlleur extends Controlleur
{
    public function ajouter()
    {
        $variable = array(
            "titre" => "Ajouter RendezVous",
            "entete" => "Rendez-Vous",
            "active2" => "active open",
            "active21" => "active open",
        );

        $this->render("rendezvous/ajouter", $variable);
    }

    public function lister()
    {
        $variable = array(
            "titre" => "Lister RendezVous",
            "entete" => "Rendez-Vous",
            "active2" => "active open",
            "active24" => "active open",
        );
        $p = new RendezVous();
        $variable['listeRendezVous'] = $p->Lister();
        $this->render("rendezvous/lister", $variable);
    }

    public function rechercher()
    {

        $variable = array(
            "titre" => "Rechercher RendezVous",
            "entete" => "Rendez-Vous",
            "active2" => "active open",
            "active22" => "active open",
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $liste = RendezVous::Rechercher($_POST['critere']);
            $variable['critere'] = $_POST['critere'];
            if (count($liste) == '0') {
                $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "RendezVous introuvable, <strong>code</strong> incorrect..");
            } else {
                $variable['listeRendezVous'] = $liste;
            }
        }

        $this->render("rendezvous/rechercher", $variable);
    }
    public function modifier()
    {

        $variable = array(
            "titre" => "Modifier RendezVous",
            "entete" => "Rendez-Vous",
            "active2" => "active open",
            "active23" => "active open",
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $liste = RendezVous::Rechercher($_POST['critere']);
            $variable['critere'] = $_POST['critere'];
            if (count($liste) == '0') {
                $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "RendezVous introuvable, <strong>code</strong> incorrect..");
            } else {
                $variable['listeRendezVous'] = $liste;
            }
        }

        $this->render("rendezvous/modifier", $variable);
    }
}
