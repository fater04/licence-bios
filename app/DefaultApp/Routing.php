<?php
use app\DefaultApp\DefaultApp as App;
App::get("/", "default.index", "index");
App::get("/dashboard", "default.index", "dashboard");
App::post("/", "default.index", "index_post");
App::get("/login", "login.login", "login");
App::post("/login", "login.login");
App::get("/deconnection", function () {
    //session_destroy();
    \app\DefaultApp\Models\Utilisateur::Deconnecter();
    App::redirection("login");
}, "deconnection");

//users
App::get("/ajouter-utilisateur", "utilisateur.ajouter", "ajouter_utilisateur");
App::post("/ajouter-utilisateur", "utilisateur.ajouter");
App::get("/utilisateurs", "utilisateur.lister", "utilisateur");
App::get("/rechercher-utilisateur", "utilisateur.rechercher", "rechercher-utilisateur");
App::post("/rechercher-utilisateur", "utilisateur.rechercher");
App::get("/modifier-utilisateur", "utilisateur.modifier", "modifier-utilisateur");
App::post("/modifier-utilisateur", "utilisateur.modifier");
App::get("/utilisateur-:id", "utilisateur.modifierID", "modifier_utilisateur")->avec("id", "['0-9']+");
App::post("/utilisateur-:id", "utilisateur.modifierID")->avec("id", "['0-9']+");

//App::get("/supprimer-utilisateur-:id", "utilisateur.supprimer", "supprimer_utilisateur")->avec("id", "['0-9']+");
//App::get("/modifier-utilisateur-:id", "utilisateur.modifier", "modifier_utilisateur")->avec("id", "['0-9']+");

// patient
App::get("/ajouter-patient", "dossier.ajouter", "ajouter_patient");
App::post("/ajouter-patient", "dossier.ajouter");
App::get("/lister-patient", "dossier.lister", "lister_patient");
App::get("/rechercher-patient", "dossier.rechercher", "rechercher_patient");
App::post("/rechercher-patient", "dossier.rechercher");
App::get("/modifier-patient", "dossier.modifier", "modifier_patient");
App::post("/modifier-patient", "dossier.modifier");
// rendez-vous
App::get("/Ajouter-RendezVous", "rendezVous.ajouter", "ajouter_RendezVous");
App::post("/Ajouter-RendezVous", "rendezVous.ajouter");
App::get("/lister-RendezVous", "rendezVous.lister", "lister_RendezVous");
App::get("/rechercher-RendezVous", "rendezVous.rechercher", "rechercher_rendezvous");
App::post("/rechercher-RendezVous", "rendezVous.rechercher");
App::get("/modifier-RendezVous", "RendezVous.modifier", "modifier_RendezVous");
App::post("/modifier-RendezVous", "RendezVous.modifier");

// attribution salle
App::get("/affecter-salle", "salle.ajouter", "affecter_salle");
App::post("/affecter-salle", "salle.ajouter");
