<?php


namespace app\DefaultApp\Controlleurs;


use app\DefaultApp\Models\Admission;
use app\DefaultApp\Models\Salle;
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
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $salle= trim($_POST['salle']);
            $dossier = trim($_POST['dossier']);
            $maladie = trim($_POST['maladie']);
            $dat = trim($_POST['dat']);
            $ad=new Admission();
            $ad->setDat($dat);
            $ad->setNumeroDossier($dossier);
            $ad->setNumeroSalle($salle);
            $ad->setMaladie($maladie);
            $r=$ad->enregistrer();
            if($r=='ok'){
                $variable['notification'] = array("type" => 'success', "titre" => "Success", "message" => "<strong>Admission</strong> ,Ajoutez avec Suceeès !");
               $r1=Salle::updateDisponibilite($salle,Salle::CheckDisponible($salle)-1);

            }else{
                $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => " " . $r);
            }
        }

        $this->render("admission/ajouter", $variable);
    }
    public function modifier()
    {
        $variable = array(
            "titre" => "Modifier Admission",
            "entete" => "Modifier Admission",
            "active3" => "active open",
            "active33" => "active open",
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if(isset($_POST['critere'])){
            $liste = Admission::Rechercher($_POST['critere']);
            $variable['critere'] = $_POST['critere'];
            if (count($liste) == '0') {
                $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "<strong>Code</strong> introuvable !!!");
            } else {
                $variable['listeAdmission'] = $liste;
            }
        }
            if(isset($_POST['idd'])){
                $salle= trim($_POST['salle']);
                $ancien_salle= trim($_POST['ancien_salle']);
                $dossier = trim($_POST['dossier']);
                $maladie = trim($_POST['maladie']);
                    $dat = trim($_POST['dat']);
                $id = trim($_POST['idd']);
                $ad=new Admission();
                $ad->setDat($dat);
                $ad->setNumeroDossier($dossier);
                $ad->setNumeroSalle($salle);
                $ad->setMaladie($maladie);
                $ad->setId($id);
                $r=$ad->modifier();
                if($r=='ok'){
                    $variable['notification'] = array("type" => 'success', "titre" => "Success", "message" => "<strong>Admission</strong> ,modifier avec Suceeès !");
                    $r1=Salle::updateDisponibilite($ancien_salle,Salle::CheckDisponible($ancien_salle)+1);
                    $r2=Salle::updateDisponibilite($salle,Salle::CheckDisponible($salle)-1);

                }else{
                    $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => " " . $r);
                }
            }

        }
        $this->render("admission/modifier", $variable);
    }
    public function rechercher()
    {
        $variable = array(
            "titre" => "Rechercher Admission",
            "entete" => "Rechercher Admission",
            "active3" => "actrive open",
            "active32" => "active open",
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $liste = Admission::Rechercher($_POST['critere']);
            $variable['critere'] = $_POST['critere'];
            if (count($liste) == '0') {
                $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => "<strong>Code</strong> introuvable !!!");
            } else {
                $variable['listeAdmission'] = $liste;
            }
        }
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
        $s = new Admission();
        $variable['listeAdmission'] = $s->Lister();
        $this->render("admission/lister", $variable);
    }
}