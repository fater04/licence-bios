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
    private $date_debut,$date_fin;

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }



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
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }


    public static function rendevousExiste($id_medecin,$debut, $fin)
    {
        try {
            $con = self::connection();
            $req="select *from rendezvous where id_medecin=:id_medecin and date_debut between :debut and :fin
             or date_fin between :debut and :fin ";

            $stmt=$con->prepare($req);
            $stmt->execute(array(
                ":debut"=>$debut,
                ":fin"=>$fin,
                ":id_medecin"=>$id_medecin
            ));
            $data=$stmt->fetchAll(\PDO::FETCH_CLASS,"app\DefaultApp\Models\RendezVous");
            if(count($data)>0){
                return $data[0];
            }
            return null;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }

    }

    public function add()
    {
        if(self::rendevousExiste($this->id_medecin,$this->date_debut,$this->date_fin)){
            return "Rendez-vous existe deja sur le systeme";
        }
        return parent::add(); // TODO: Change the autogenerated stub
    }

    public static function total()
    {
        $bdd = self::connection();
        $total = $bdd->query('SELECT * FROM rendezvous');
        return $total->rowCount();
    }

    public static function totalJour()
    {
        $date=date("Y-m-d");
        $bdd = self::connection();
        $total = $bdd->query("SELECT * FROM rendezvous where date_rendezvous='".$date."'");
        return $total->rowCount();
    }

    public static function dernierId()
    {
        $con = self::connection();
        $req = "SELECT *FROM rendezvous ORDER BY id DESC LIMIT 1";
        $rps = $con->query($req);
        $data = $rps->fetch();
        $id = $data['id'];
        return $id;
    }



}
