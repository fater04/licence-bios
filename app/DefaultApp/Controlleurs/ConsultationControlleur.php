<?php


namespace app\DefaultApp\Controlleurs;


use systeme\Controlleur\Controlleur;

class ConsultationControlleur extends Controlleur
{
    public function ajouter()
    {
        $variable = array(
            "titre" => "ajouter consultation",
            "entete" => "Ajouter Consultation",
            "active4" => "active open",
            "active41" => "active open",
        );

        $this->render("consultation/ajouter", $variable);
    }
    public function modifier()
    {
        $variable = array(
            "titre" => "modifier consultation",
            "entete" => "Modifier consultation",
            "active4" => "active open",
            "active42" => "active open",
        );

        $this->render("consultation/modifier", $variable);
    }
    public function rechercher()
    {
        $variable = array(
            "titre" => "rechercher consultation",
            "entete" => "Rechercher Consultation",
            "active4" => "active open",
            "active43" => "active open",
        );

        $this->render("consultation/rechercher", $variable);
    }
    public function lister()
    {
        $variable = array(
            "titre" => "lister consultation",
            "entete" => "Liste des Consultation",
            "active4" => "active open",
            "active44" => "active open",
        );

        $this->render("consultation/lister", $variable);
    }
}