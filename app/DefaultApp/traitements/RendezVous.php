<?php
require_once "../../../vendor/autoload.php";

if (isset($_GET['no'])) {
    $no = addslashes($_GET['no']);
    $patient = \app\DefaultApp\Models\Patient::rechercherParCode($no);
    if ($patient === null) {
        echo "nf";
    } else {
        echo strtoupper($patient->getNom() . " " . $patient->getPrenom());
    }

}

if (isset($_POST['ajouter_rendezvous'])) {
    $resultat=array();
    try {
        $code = trim(addslashes(htmlentities($_POST['no_dossier'])));
        if(empty($code)){
            $message ="entrer code valide";
            $resultat['message']=$message;
            echo json_encode($resultat);
            return;
        }
        $nom_complet = trim(addslashes(htmlentities($_POST['nom_complet'])));
        if(empty($nom_complet)){
            $message="nom complet incorrect";
            $resultat['message']=$message;
            echo json_encode($resultat);
            return;
        }

        $date = trim(addslashes(htmlentities($_POST['date_rendezvous'])));

        if($date===''){
            $message="entrer une date valide";
            $resultat['message']=$message;
            echo json_encode($resultat);
            return;
        }

        $start = trim(addslashes(htmlentities($_POST['h_start'])));
        $fin = trim(addslashes(htmlentities($_POST['h_end'])));
        $id_medecin = trim(addslashes(htmlentities($_POST['medecin'])));
        $note = trim(addslashes(htmlentities($_POST['note'])));


        if (!\app\DefaultApp\DefaultApp::isHeureValide($start)) {
            $message= "heure debut incorrect";
            $resultat['message']=$message;
            echo json_encode($resultat);
            return;
        }

        if (!\app\DefaultApp\DefaultApp::isHeureValide($fin)) {
            $message= "heure fin incorrect";
            $resultat['message']=$message;
            echo json_encode($resultat);
            return;
        }

        $difference = strtotime($start) - strtotime($fin);
        $difference_in_minutes = $difference / 60;

        if ($difference_in_minutes > 0) {
            $message= "heure depart incorrect (il doit etre inferieur a heure fin)";
            $resultat['message']=$message;
            echo json_encode($resultat);
            return;
        }

        if (abs($difference_in_minutes) < 5) {
            $message= "il faut respecter une interval de 5 minutes entre les deux dates";
            $resultat['message']=$message;
            echo json_encode($resultat);
            return;
        }

        $date_debut=$date." ".$start.":00";
        $date_fin=$date." ".$fin.":00";

        $rd = new \app\DefaultApp\Models\RendezVous();
        $rd->setCodePatient($code);
        $rd->setDateRendezVous($date);
        $rd->setHeureDebut($start);
        $rd->setHeureFin($fin);
        $rd->setIdMedecin($id_medecin);
        $rd->setNote($note);
        $rd->setDateDebut($date_debut);
        $rd->setDateFin($date_fin);
        $rd->setDateCreation(date("Y-m-d h:i:s"));
        $r = $rd->add();
        if($r==="ok"){
            $message='ok';
            $resultat['id']=\app\DefaultApp\Models\RendezVous::dernierId();
        }else{
            $message=$r;
        }
        $resultat['message']=$message;
        echo json_encode($resultat);
    } catch (Exception $ex) {
        $message=$ex->getMessage();
        $resultat['message']=$message;
        echo json_encode($resultat);
    }

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
