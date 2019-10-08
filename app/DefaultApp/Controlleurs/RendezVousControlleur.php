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

class RendezVousControlleur extends Controlleur
{
    public function ajouter()
    {
        $variable = array(
            "titre" => "Ajouter RendezVous",
            "entete" => "Rendez-Vous",
            "active1" => "active open",
            "active11" => "active open"
        );
        $this->render("RendezVous/ajouter", $variable);
    }
/**
    public function lister()
    {
        $variable = array(
            "titre" => "Ajouter Dossier",
            "entete" => "Patient",
            "active1" => "active open",
            "active14" => "active open"
        );
        $p = new Patient();
        $variable['listePatient'] = $p->Lister();
        $this->render("dossier/lister", $variable);
    }

    public function rechercher()
    {

        $variable = array(
            "titre" => "Rechercher Patient",
            "entete" => "Patient",
            "active1" => "active open",
            "active12" => "active open"
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $variable['listePatient'] = Patient::Rechercher_All($_POST['critere']);
        }

        $this->render("dossier/rechercher", $variable);
    }
    public function modifier()
    {

        $variable = array(
            "titre" => "Rechercher Patient",
            "entete" => "Patient",
            "active1" => "active open",
            "active13" => "active open"
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $variable['listePatient'] = Patient::Rechercher_All($_POST['critere']);
        }

        $this->render("dossier/modifier", $variable);
    }
*/

}