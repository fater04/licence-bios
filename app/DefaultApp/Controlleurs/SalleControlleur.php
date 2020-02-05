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
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $numero=trim($_POST['numero']);
            $types=trim($_POST['types']);
            $lit=trim($_POST['lit']);

            if($lit> 0  && $lit < 10){

                if($types=='prive'){
                    if($lit > 2){
                        $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "Il ne peut y avoir au maximum deux lits dans une salle <strong>privé</strong>.");
                    return    $this->render("salle/ajouter", $variable);
                    }

                }elseif($types=='hospitalisation'){
                    if($lit > 1){
                         $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "Il ne peut y avoir qu'un seul lit dans une salle <strong>hospitalisation</strong> .");
                        return    $this->render("salle/ajouter", $variable);
                    }
                }

                $sa = new Salle();
                $sa->setNumero($numero);
                $sa->setLit($lit);
                $sa->setTypes($types);
                $sa->setDisponible($lit);
                $r = $sa->enregistrer();
                if ($r == "ok") {
                    $variable['notification'] = array("type" => 'success', "titre" => "Success", "message" => "<strong>Salle</strong> ,Ajoutez avec Suceeès !");
                } else {
                    $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "<strong>code</strong>," . $r);
                }
            }else{
                $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "Nombre de <strong>lit</strong> Incorrect !");
            }
        }
        $this->render("salle/ajouter", $variable);
    }
   
    public function modifier()
    {
        $variable = array(
            "titre" => "modifier salle",
            "entete" => "Modifier Salle",
            "active5" => "active open",
            "active53" => "active open",
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if(isset($_POST['critere'])){
            $liste = Salle::Rechercher($_POST['critere']);
            $variable['critere'] = $_POST['critere'];
            if (count($liste) == '0') {
                $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "<strong>Salle</strong> introuvable !!!");
            } else {
                $variable['listeSalle'] = $liste;
            }
        }}
        if(isset($_POST['id'])){
            $numero=trim($_POST['numero']);
            $types=trim($_POST['types']);
            $disponible=trim($_POST['lit']);
            $lit=trim($_POST['lit']);
            $id=trim($_POST['id']);

            if($lit> 0  && $lit < 10) {
                $sa = new Salle();
                $sa->setNumero($numero);


                $sa->setTypes($types);
                $sa->setDisponible($disponible);
                $sa->setId($id);
                $r = $sa->modifier();
                if ($r == "ok") {
                    $variable['notification'] = array("type" => 'success', "titre" => "Success", "message" => "<strong>Salle</strong> ,Modifier avec Suceeès !");
                } else {
                    $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "<strong>code</strong>," . $r);
                }


            }else{
                $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "Nombre de <strong>lit</strong> Incorrect !");
            }
        }

        $this->render("salle/modifier", $variable);
    }
    public function rechercher()
    {
        $variable = array(
            "titre" => "rechercher salle",
            "entete" => "Rechercher Salle",
            "active5" => "active open",
            "active52" => "active open",
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $liste = Salle::Rechercher($_POST['critere']);
            $variable['critere'] = $_POST['critere'];
            if (count($liste) == '0') {
                $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "<strong>Salle</strong> introuvable !!!");
            } else {
                $variable['listeSalle'] = $liste;
            }
        }

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
        $s = new Salle();
        $variable['listeSalle'] = $s->Lister();
        $this->render("salle/lister", $variable);
    }

}