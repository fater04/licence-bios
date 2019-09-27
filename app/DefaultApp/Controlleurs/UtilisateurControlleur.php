<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/22/2019
 * Time: 9:51 PM
 */

namespace app\DefaultApp\Controlleurs;


use app\DefaultApp\Models\Utilisateur;
use systeme\Controlleur\Controlleur;

class UtilisateurControlleur extends Controlleur
{
    public function lister()
    {

        $variable = array(
            "titre" => "Lister Utilisateur",
            "entete" => "Utilisateur",
            "active0"=>"active open",
            "active04"=>"active open"
        );
        $user = new Utilisateur();
        $variable['listeUtilisateur'] = $user->Lister();
        $this->render("utilisateur/lister", $variable);
    }

    public function rechercher()
    {

        $variable = array(
            "titre" => "Rechercher Utilisateur",
            "entete" => "Utilisateur",
            "active0"=>"active open",
            "active02"=>"active open"
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $variable['listeUtilisateur'] = Utilisateur::Rechercher_All($_POST['critere']);
        }

        $this->render("utilisateur/rechercher", $variable);
    }


    public function ajouter()
    {

        $variable = array(
            "titre" => "Ajouter Utilisateur",
            "entete" => "Utilisateur",
            "active0"=>"active open",
            "active01"=>"active open"
        );

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $utlisateur = $this->getModel("utilisateur");
            $photo = "";
            if ($_FILES['image']['size'] != 0) {
                $image = new \app\DefaultApp\Models\Image($_FILES['image']['name']);
                $image->Upload();
                $photo = $image->getSrc();
                $utlisateur->setPhoto($photo);
            } else {
                $utlisateur->setPhoto('n/a');
            }

            $utlisateur->setNom($_POST['nom']);
            $utlisateur->setPrenom($_POST['prenom']);
            $utlisateur->setPseudo($_POST['pseudo']);
            $utlisateur->setRole($_POST['role']);
            $utlisateur->setActive("oui");
            $utlisateur->setTelephone($_POST['telephone']);
            $utlisateur->setEmail($_POST['email']);

            $motdepasse = $_POST['motdepasse'];
            $confirmer = $_POST['confirmermotdepasse'];

            if ($motdepasse != $confirmer) {
                $variable['erreur'] = "Verifier les mot de passe";
            } else {
                $utlisateur->setMotdepasse($motdepasse);
                $message = $utlisateur->Enregistrer();
                if ($message == 'ok') {
                    $variable['notification'] = array("type" => 'success', "titre" => "Message", "message" => "Utilisateur ajoute(e) avec Succes !");
                } else {
                    $variable['erreur'] = $message;
                    $variable['notification'] = array("type" => 'warning', "titre" => "Message", "message" => $message);
                }
            }

        }

        $this->render("utilisateur/ajouter", $variable);
    }

    public function modifier(){
        $variable = array(
            "titre" => "Modifier Utilisateur",
            "entete" => "Utilisateur",
            "active0"=>"active open",
            "active03"=>"active open"
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $variable['listeUtilisateur'] = Utilisateur::Rechercher_All($_POST['critere']);
        }

        $this->render("utilisateur/modifier", $variable);
    }
    public  function modifierID($id)
    {
        $variable = array(
            "titre" => "Modifier Utilisateur",
            "entete" => "Utilisateur",
            "active0"=>"active open",
            "active03"=>"active open",
            "id"=>$id
        );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $utlisateur = $this->getModel("utilisateur");
            $photo = "";
            if ($_FILES['image']['size'] != 0) {
                $image = new \app\DefaultApp\Models\Image($_FILES['image']['name']);
                $image->Upload();
                $photo = $image->getSrc();
                $utlisateur->setPhoto($photo);
            }else{
                $utlisateur->setPhoto($_POST['path']);
            }

            $utlisateur->setNom($_POST['nom']);
            $utlisateur->setPrenom($_POST['prenom']);
            $utlisateur->setPseudo($_POST['pseudo']);
            $utlisateur->setRole($_POST['role']);
            $utlisateur->setActive("oui");
            $utlisateur->setTelephone($_POST['telephone']);
            $utlisateur->setEmail($_POST['email']);
            $utlisateur->setId($id);

            $motdepasse = $_POST['motdepasse'];
            $confirmer = $_POST['confirmermotdepasse'];

            if($motdepasse==""){
                $message = $utlisateur->modifier1();
                if ($message == 'ok') {
                    $variable['notification'] = array("type" => 'success', "titre" => "Succes", "message" => "Utilisateur Modifie(e) avec Succes !");
                } else {
                    $variable['erreur'] = $message;
                    $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => $message);
                }
            }else {
                if ($motdepasse != $confirmer) {
                    $variable['erreur'] = "Verifier les mot de passe";
                } else {
                    $utlisateur->setMotdepasse($motdepasse);
                    $message = $utlisateur->modifier();
                    if ($message == 'ok') {
                        $variable['notification'] = array("type" => 'success', "titre" => "Success", "message" => "Utilisateur Modifie(e) avec Succes !");
                    } else {
                        $variable['erreur'] = $message;
                        $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => $message);
                    }
                }
            }

        }

        $this->render("utilisateur/modifier", $variable);
    }
//
//        $variable=array();
//        $variable['titre']="Utilisateur / modifier";
//        $variable['souMenu']="soumenu_utilisateur";
//        if($_SERVER['REQUEST_METHOD']=="POST")
//        {
//            $utlisateur=$this->getModel("utilisateur");
//            $utlisateur->setNom($_POST['nom']);
//            $utlisateur->setPrenom($_POST['prenom']);
//            $utlisateur->setPseudo($_POST['pseudo']);
//            $utlisateur->setRole($_POST['role']);
//            $utlisateur->setActive("oui");
//            $motdepasse=$_POST['motdepasse'];
//            $confirmer=$_POST['confirmermotdepasse'];
//
//            if($motdepasse!=$confirmer){
//                $variable['erreur']="Verifier les mot de passe" ;
//            }else{
//                $utlisateur->setMotdepasse($motdepasse);
//
//                $message=$utlisateur->Enregistrer();
//                if($message=='Enregistrer avec sucess')
//                {
//                    $variable['success']=$message;
//                }else
//                {
//                    $variable['erreur']=$message;
//                }
//            }
//
//        }
//
//        $this->render("utilisateur/modifier",$variable);
//    }
//
//    public function lister()
//    {
//        $variable=array();
//        $variable['titre']="Utilisateur / Lister";
//        $variable['souMenu']="soumenu_utilisateur";
//        $variable['listeUtilisateur']=Utilisateur::listeUser();
//        $this->render("utilisateur/lister",$variable);
//    }
//
//    public function blocker($id)
//    {
//        Utilisateur::blocker($id);
//        CentreSante::redirection("lister_utilisateur");
//    }
//
//    public function deblocker($id)
//    {
//        Utilisateur::deblocker($id);
//        header("location: lister-utilisateur");
//    }
//
//
//    public function supprimer($id)
//    {
//        Utilisateur::Supprimer($id);
//        header("location: lister-utilisateur");
//    }
}