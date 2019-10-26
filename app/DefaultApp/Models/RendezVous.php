<?php
/**
 * Created by PhpStorm.
 * User: Dolphe
 * Date: 10/06/2019
 * Time: 2:50 PM
 */

namespace app\DefaultApp\Models;

use systeme\Model\Model;

class RendezVous extends Model
{
    private $id, $code_patient, $date_rendezvous, $heure_debut, $heure_fin, $id_medecin, $note, $date_creation;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCodePatient()
    {
        return $this->code_patient;
    }

    /**
     * @param mixed $code_patient
     */
    public function setCodePatient($code_patient)
    {
        $this->code_patient = $code_patient;
    }

    /**
     * @return mixed
     */
    public function getDateRendezvous()
    {
        return $this->date_rendezvous;
    }

    /**
     * @param mixed $date_rendezvous
     */
    public function setDateRendezvous($date_rendezvous)
    {
        $this->date_rendezvous = $date_rendezvous;
    }

    /**
     * @return mixed
     */
    public function getHeureDebut()
    {
        return $this->heure_debut;
    }

    /**
     * @param mixed $heure_debut
     */
    public function setHeureDebut($heure_debut)
    {
        $this->heure_debut = $heure_debut;
    }

    /**
     * @return mixed
     */
    public function getHeureFin()
    {
        return $this->heure_fin;
    }

    /**
     * @param mixed $heure_fin
     */
    public function setHeureFin($heure_fin)
    {
        $this->heure_fin = $heure_fin;
    }

    /**
     * @return mixed
     */
    public function getIdMedecin()
    {
        return $this->id_medecin;
    }

    /**
     * @param mixed $id_medecin
     */
    public function setIdMedecin($id_medecin)
    {
        $this->id_medecin = $id_medecin;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param mixed $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }
    private function validerInformation()
    {

//        if(!\app\DefaultApp\DefaultApp::validerDate($this->date_naissance,"d/m/Y")){
        //            return "entrer une date correct";
        //        }
        //
        //        if( \app\DefaultApp\DefaultApp::calculAge(explode("/",$this->date_naissance)[2])<=0){
        //            return "entrer une date correct";
        //        }

        return true;

    }
    public function enregistrer()
    {
        try {

            $v = self::validerInformation();

            if ($v == 1) {
                $con = self::connection();
                $req = "insert into rendezvous (
               code_patient,date_rendezvous,heure_debut,heure_fin,id_medecin,note) VALUES
              (:code_patient,:date_rendezvous,:heure_debut,:heure_fin,:id_medecin,:note)";

                $param = array(
                    ":code_patient" => $this->code_patient,
                    ":date_rendezvous" => $this->date_rendezvous,
                    ":heure_debut" => $this->heure_debut,
                    ":heure_fin" => $this->heure_fin,
                    ":id_medecin" => $this->id_medecin,
                    ":note" => $this->note,

                );

                $stmt = $con->prepare($req);
                if ($stmt->execute($param)) {
                    return "ok";
                } else {
                    return "no";
                }

            } else {
                return $v;
            }

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function modifier()
    {
        try {
            $v = self::validerInformation();
            if ($v == 1) {
                $con = self::connection();
                $req = "update rendezvous set    code_patient=:code_patient,date_rendezvous=:date_rendezvous,heure_debut=:heure_debut,heure_fin=:heure_fin,id_medecin=:id_medecin,note=:note where id=:id";

                $param = array(
                    ":code_patient" => $this->code_patient,
                    ":date_rendezvous" => $this->date_rendezvous,
                    ":heure_debut" => $this->heure_debut,
                    ":heure_fin" => $this->heure_fin,
                    ":id_medecin" => $this->id_medecin,
                    ":note" => $this->note,
                    ":id" => $this->id,
                );

                $stmt = $con->prepare($req);
                if ($stmt->execute($param)) {
                    return "ok";
                } else {
                    return "no";
                }

            } else {
                return $v;
            }

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public static function lister()
    {
        try {
            $con = self::connection();
            $req = "select *from rendezvous";
            $stmt = $con->prepare($req);
            $stmt->execute();
            $res = $stmt->fetchAll(\PDO::FETCH_CLASS, "app\\DefaultApp\\Models\\RendezVous");
            return $res;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    public static function Rechercher($critere)
    {
        try {
            $con = self::connection();
            $req = "SELECT *FROM rendezvous WHERE id='" . $critere . "' ";

            $stmt = $con->prepare($req);
            $stmt->execute();
            $data = $stmt->fetchAll(\PDO::FETCH_CLASS, "app\DefaultApp\Models\RendezVous");
            return $data;
        } catch (Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

}
