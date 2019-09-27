<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/22/2019
 * Time: 10:03 PM
 */

namespace app\DefaultApp\Controlleurs;


use app\DefaultApp\Models\Utilisateur;
use systeme\Application\Application;
use systeme\Controlleur\Controlleur;

class LoginControlleur extends Controlleur
{
    protected $nom_template = "login";

    public function login()
    {
        $variables = array(
            "titre" => "Login"
        );

        if ($_SERVER['REQUEST_METHOD'] == "POST") {


            $pseudo = trim($_POST['username']);
            $user_password = trim($_POST['password']);
            echo $message = Utilisateur::Connecter($pseudo, $user_password);


            if ($message == "ok" || $message == "session encour") {
////                    if(Utilisateur::role()=="eleve"){
////                        Application::redirection("dashboard");
                     \systeme\Application\Application::redirection("dashboard");
            } else {
                $variable['notification'] = array("type" => 'warning', "titre" => "Erreur", "message" => $message);

            }
//
        }
//

        $this->render("login/login", $variables);
    }

}