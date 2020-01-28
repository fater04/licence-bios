<?php


namespace app\DefaultApp\Controlleurs;


use systeme\Controlleur\Controlleur;

class AdmissionControlleur extends Controlleur
{
    public function ajouter()
    {
        $variable = array(
            "titre" => "Admission",
            "entete" => "Admission",
            "active3" => "active open",
            "active31" => "active open",
        );

        $this->render("admission/ajouter", $variable);
    }
    public function modifier()
    {
        $variable = array(
            "titre" => "Modifier Admission",
            "entete" => "Modifier Admission",
            "active3" => "active open",
            "active32" => "active open",
        );

        $this->render("admission/modifier", $variable);
    }
    public function rechercher()
    {
        $variable = array(
            "titre" => "Rechercher Admission",
            "entete" => "Rechercher Admission",
            "active3" => "actrive open",
            "active33" => "active open",
        );

        $this->render("admission/rechercher", $variable);
    }
    public function lister()
    {
        $variable = array(
            "titre" => "Lister Admission",
            "entete" => "Lister des admissions",
            "active3" => "active open",
            "active34" => "active open",
        );

        $this->render("admission/lister", $variable);
    }
}