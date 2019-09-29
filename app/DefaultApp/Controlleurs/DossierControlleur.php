<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/28/2019
 * Time: 10:36 AM
 */

namespace app\DefaultApp\Controlleurs;


use app\DefaultApp\Models\Patient;
use systeme\Controlleur\Controlleur;

class DossierControlleur extends Controlleur
{
    public function ajouter()
    {
        $variable = array(
            "titre" => "Ajouter Dossier",
            "entete" => "Patient",
            "active1" => "active open",
            "active11" => "active open"
        );
        $this->render("dossier/ajouter", $variable);
    }

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


}