<?php
require_once "../../../vendor/autoload.php";

if (isset($_POST['ajouter_rendezvous'])) {

    $code = trim(addslashes(htmlentities($_POST['no_dossier'])));
    $nom_complet = trim(addslashes(htmlentities($_POST['nom_complet'])));
    $date = trim(addslashes(htmlentities($_POST['date_rendezvous'])));
    $start = trim(addslashes(htmlentities($_POST['h_start'])));
    $fin = trim(addslashes(htmlentities($_POST['h_end'])));
    $id_medecin = trim(addslashes(htmlentities($_POST['medecin'])));
    $note = trim(addslashes(htmlentities($_POST['note'])));
    $rd = new \app\DefaultApp\Models\RendezVous();
    $rd->setCodePatient($code);
    $rd->setDateRendezVous($date);
    $rd->setHeureDebut($start);
    $rd->setHeureFin($fin);
    $rd->setIdMedecin($id_medecin);
    $rd->setNote($note);
    $r = $rd->enregistrer();
    echo $r;

}

if (isset($_POST['modifier_rendezvous'])) {

    $code = trim(addslashes(htmlentities($_POST['no_dossier'])));
    $nom_complet = trim(addslashes(htmlentities($_POST['nom_complet'])));
    $date = trim(addslashes(htmlentities($_POST['date_rendezvous'])));
    $start = trim(addslashes(htmlentities($_POST['h_start'])));
    $fin = trim(addslashes(htmlentities($_POST['h_end'])));
    $id_medecin = trim(addslashes(htmlentities($_POST['medecin'])));
    $id = trim(addslashes(htmlentities($_POST['id_rendezvous'])));

    $note = trim(addslashes(htmlentities($_POST['note'])));

    $rd = new \app\DefaultApp\Models\RendezVous();
    $rd->setCodePatient($code);
    $rd->setDateRendezVous($date);
    $rd->setHeureDebut($start);
    $rd->setHeureFin($fin);
    $rd->setIdMedecin($id_medecin);
    $rd->setNote($note);
    $rd->setId($id);
    $r = $rd->modifier();
    echo $r;

}
