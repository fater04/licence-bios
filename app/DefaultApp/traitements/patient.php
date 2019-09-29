<?php
require_once "../../../vendor/autoload.php";

if (isset($_POST['ajouter_patient'])) {


    $code = trim(addslashes(htmlentities($_POST['code'])));
    $nom = trim(addslashes(htmlentities($_POST['nom'])));
    $prenom = trim(addslashes(htmlentities($_POST['prenom'])));
    $nom_mere = trim(addslashes(htmlentities($_POST['nom_mere'])));
    $adresse = trim(addslashes(htmlentities($_POST['addresse'])));
    $email = trim(addslashes(htmlentities($_POST['email'])));
    $profession = trim(addslashes(htmlentities($_POST['profession'])));
    $sexe = trim(addslashes(htmlentities($_POST['sexe'])));
    $date_naissance = trim(addslashes(htmlentities($_POST['date_naissance'])));
    $identite = trim(addslashes(htmlentities($_POST['cin'])));
    $telephone = trim(addslashes(htmlentities($_POST['telephone'])));
    $statut_matrimonial = trim(addslashes(htmlentities($_POST['statut_matrimonial'])));
    $groupe_sanguin = trim(addslashes(htmlentities($_POST['groupe_sanguin'])));

    $patient = new \app\DefaultApp\Models\Patient();
    $patient->setCode($code);
    $patient->setNom($nom);
    $patient->setPrenom($prenom);
    $patient->setNomMere($nom_mere);
    $patient->setAdresse($adresse);
    $patient->setEmail($email);
    $patient->setProfession($profession);
    $patient->setSexe($sexe);
    $patient->setDateNaissance($date_naissance);
    $patient->setCin($identite);
    $patient->setTelephone($telephone);
    $patient->setStatutMatrimonial($statut_matrimonial);
    $patient->setGroupeSanguin($groupe_sanguin);
    $m = $patient->enregistrer();
    echo $m;
}

if (isset($_POST['modifier_patient'])) {
    $id = trim(addslashes(htmlentities($_POST['id'])));
    $code = trim(addslashes(htmlentities($_POST['code'])));
    $nom = trim(addslashes(htmlentities($_POST['nom'])));
    $prenom = trim(addslashes(htmlentities($_POST['prenom'])));
    $nom_mere = trim(addslashes(htmlentities($_POST['nom_mere'])));
    $adresse = trim(addslashes(htmlentities($_POST['adresse'])));
    $email = trim(addslashes(htmlentities($_POST['email'])));
    $profession = trim(addslashes(htmlentities($_POST['profession'])));
    $sexe = trim(addslashes(htmlentities($_POST['sexe'])));
    $date_naissance = trim(addslashes(htmlentities($_POST['date_naissance'])));
    $identite = trim(addslashes(htmlentities($_POST['identite'])));
    $telephone = trim(addslashes(htmlentities($_POST['telephone'])));
    $statut_matrimonial = trim(addslashes(htmlentities($_POST['statut_matrimonial'])));
    $groupe_sanguin = trim(addslashes(htmlentities($_POST['groupe_sanguin'])));


    $patient = new \app\DefaultApp\Models\Patient();
    $patient->setId($id);
    $patient->setCode($code);
    $patient->setNom($nom);
    $patient->setPrenom($prenom);
    $patient->setNomMere($nom_mere);
    $patient->setAdresse($adresse);
    $patient->setEmail($email);
    $patient->setProfession($profession);
    $patient->setSexe($sexe);
    $patient->setDateNaissance($date_naissance);
    $patient->setIdentite($identite);
    $patient->setTelephone($telephone);
    $patient->setStatutMatrimonial($statut_matrimonial);
    $patient->setGroupeSanguin($groupe_sanguin);
    $m = $patient->modifier();
    echo $m;

}

if (isset($_POST['rechercherPatient'])) {
    $code = trim(addslashes($_POST['code']));
    $patient = new \app\DefaultApp\Models\Patient();
    $patient = \app\DefaultApp\Models\Patient::rechercherParCode($code);
    if ($patient == null) {
        echo "Patient introuvable, code incorrect..";
        return;
    }
    $id_patient = $patient->getId();
    echo "<script>document.location.href='rechercher-patient-$id_patient'</script>";
    ?>

    <?php
}

if (isset($_POST['consultation'])) {
    $id_patient = $_POST['id_patient'];
    $id_medecin = $_POST['id_medecin'];
    $date = trim(addslashes($_POST['date']));
    $motif = trim(addslashes(htmlentities($_POST['motif'])));
    $cs = new \app\DefaultApp\Models\Consultation();
    $cs->setIdPatient($id_patient);
    $cs->setIdMedecin($id_medecin);
    $cs->setDate($date);
    $cs->setMotif($motif);
    $cs->setStatut("oui");
    $m = $cs->enregistrer();
    if ($m == "ok") {
        $tr = new \app\DefaultApp\Models\Transaction();
        $tr->setDate(date("Y-m-d"));
        $tr->setHeure(date("h:i:s"));
        $tr->setService("consultation");
        $tr->setPrix(\app\DefaultApp\Models\Consultation::prixConsultation());
        $mm = $tr->enregistrer();
        echo $mm;
    } else {
        echo $m;
    }
}

if (isset($_POST['prescription'])) {
    $id_patient = $_POST['id_patient'];
    $id_medecin = $_POST['id_medecin'];
    $id_consultation = $_POST['id_consultation'];
    $date = trim(addslashes($_POST['date']));
    $description = trim(addslashes($_GET['description']));
    if ($description == "") {
        echo "Entrer une description";
        return;
    }
    $prs = new \app\DefaultApp\Models\Prescription();
    $prs->setIdMedecin($id_medecin);
    $prs->setIdPatient($id_patient);
    $prs->setIdConsultation($id_consultation);
    $prs->setDate($date);
    $prs->setDescription($description);
    $m = $prs->enregistrer();
    echo $m;
}