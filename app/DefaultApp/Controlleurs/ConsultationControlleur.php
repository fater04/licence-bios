<?php


namespace app\DefaultApp\Controlleurs;


use systeme\Controlleur\Controlleur;

class ConsultationControlleur extends Controlleur
{
    public function ajouter()
    {
        $variable = array(
            "titre" => "consultation",
            "entete" => "consultation",
            "active4" => "active open",
            "active41" => "active open",
        );

        $this->render("consultation/ajouter", $variable);
    }
    public function modifier()
    {
        $variable = array(
            "titre" => "consultation",
            "entete" => "consultation",
            "active4" => "active open",
            "active42" => "active open",
        );

        $this->render("consultation/modifier", $variable);
    }
    public function rechercher()
    {
        $variable = array(
            "titre" => "consultation",
            "entete" => "consultation",
            "active4" => "active open",
            "active43" => "active open",
        );

        $this->render("consultation/rechercher", $variable);
    }
    public function lister()
    {
        $variable = array(
            "titre" => "consultation",
            "entete" => "consultation",
            "active4" => "active open",
            "active44" => "active open",
        );

        $this->render("consultation/lister", $variable);
    }
}