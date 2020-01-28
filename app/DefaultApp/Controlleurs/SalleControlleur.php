<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/28/2019
 * Time: 10:36 AM
 */

namespace app\DefaultApp\Controlleurs;


use app\DefaultApp\Models\Salle;
use systeme\Controlleur\Controlleur;

class SalleControlleur extends Controlleur
{
    public function ajouter()
    {
        $variable = array(
            "titre" => "Ajouter Salle",
            "entete" => "Ajouter Salle",
            "active5" => "active open",
            "active51" => "active open"
        );
        $this->render("salle/ajouter", $variable);
    }
   
    public function modifier()
    {
        $variable = array(
            "titre" => "modifier salle",
            "entete" => "Modifier Salle",
            "active5" => "active open",
            "active52" => "active open",
        );

        $this->render("salle/modifier", $variable);
    }
    public function rechercher()
    {
        $variable = array(
            "titre" => "rechercher salle",
            "entete" => "Rechercher Salle",
            "active5" => "active open",
            "active53" => "active open",
        );

        $this->render("salle/rechercher", $variable);
    }
    public function lister()
    {
        $variable = array(
            "titre" => "lister salle",
            "entete" => "Lister des Salle",
            "active5" => "active open",
            "active54" => "active open",
        );

        $this->render("salle/lister", $variable);
    }

}