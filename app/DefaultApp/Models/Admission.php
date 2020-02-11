<?php


namespace app\DefaultApp\Models;


use systeme\Model\Model;

class Admission extends Model
{
private $id;
private $numero_salle;
private $numero_dossier;
private $maladie;
private $dat;

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
    public function getNumeroSalle()
    {
        return $this->numero_salle;
    }

    /**
     * @param mixed $numero_salle
     */
    public function setNumeroSalle($numero_salle)
    {
        $this->numero_salle = $numero_salle;
    }

    /**
     * @return mixed
     */
    public function getNumeroDossier()
    {
        return $this->numero_dossier;
    }

    /**
     * @param mixed $numero_dossier
     */
    public function setNumeroDossier($numero_dossier)
    {
        $this->numero_dossier = $numero_dossier;
    }

    /**
     * @return mixed
     */
    public function getMaladie()
    {
        return $this->maladie;
    }

    /**
     * @param mixed $maladie
     */
    public function setMaladie($maladie)
    {
        $this->maladie = $maladie;
    }

    /**
     * @return mixed
     */
    public function getDat()
    {
        return $this->dat;
    }

    /**
     * @param mixed $dat
     */
    public function setDat($dat)
    {
        $this->dat = $dat;
    }
    public static function codePatientExiste($code)
    {
        $con = self::Connection();
        $req = "SELECT *FROM admission WHERE numero_dossier='" . $code . "'";
        $rs = $con->query($req);
        if ($rs->fetch()) {
            $con = null;
            return true;
        } else {
            $con = null;
            return false;
        }
    }
    public function enregistrer()
    {
        try {
            if (self::codePatientExiste($this->numero_dossier)) {
                return "Patient(e) déjà admis(e) a une salle !";
            }
            $con = self::connection();
            $req = "insert into admission (numero_salle,numero_dossier,maladie,dat) VALUES(:numero_salle,:numero_dossier,:maladie,:dat)";
            $param = array(
                ":numero_salle" => $this->numero_salle,
                ":numero_dossier" => $this->numero_dossier,
                ":maladie"=>$this->maladie,
                ":dat"=>$this->dat

            );

            $stmt = $con->prepare($req);
            if ($stmt->execute($param)) {
                return "ok";
            } else {
                return "no";
            }

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function modifier()
    {
        try {
            $con = self::connection();
            $req = "update admission set  numero_salle=:numero_salle,numero_dossier=:numero_dossier,maladie=:maladie,dat=:dat where id=:id";

            $param = array(
                ":numero_salle" => $this->numero_salle,
                ":numero_dossier" => $this->numero_dossier,
                ":maladie"=>$this->maladie,
                ":dat"=>$this->dat,
                ":id" => $this->id
            );

            $stmt = $con->prepare($req);
            if ($stmt->execute($param)) {
                return "ok";
            } else {
                return "no";
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public static function lister()
    {
        try {
            $con = self::connection();
            $req = "select *from admission";
            $stmt = $con->prepare($req);
            $stmt->execute();
            $res = $stmt->fetchAll(\PDO::FETCH_CLASS, "app\\DefaultApp\\Models\\Admission");
            return $res;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }
    public static function Rechercher($critere)
    {
        try {
            $con = self::connection();
            $req = "SELECT *FROM admission WHERE numero_salle ='" . $critere . "' or numero_dossier='" . $critere . "'  ";
            $stmt = $con->prepare($req);
            $stmt->execute();
            $data = $stmt->fetchAll(\PDO::FETCH_CLASS, "app\DefaultApp\Models\Admission");
            return $data;
        } catch (Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }
}