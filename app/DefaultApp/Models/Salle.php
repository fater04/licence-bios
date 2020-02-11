<?php
/**
 * Created by PhpStorm.
 * User: Dolphe
 * Date: 10/06/2019
 * Time: 2:50 PM
 */

namespace app\DefaultApp\Models;


use systeme\Model\Model;

class Salle extends Model
{
    private $id;
    private $numero;
    private $types;
    private $lit;
    private $disponible;
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
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param mixed $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @return mixed
     */
    public function getLit()
    {
        return $this->lit;
    }

    /**
     * @param mixed $lit
     */
    public function setLit($lit)
    {
        $this->lit = $lit;
    }

    /**
     * @return mixed
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * @param mixed $disponible
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
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

    public function enregistrer()
    {
        try {
                $con = self::connection();
                $req = "insert into salle (numero,types,lit,disponible) VALUES( :numero,:types,:lit,:disponible)";
                $param = array(
                    ":numero" => $this->numero,
                    ":types" => $this->types,
                    ":lit"=>$this->lit,
                    ":disponible"=>$this->disponible

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
                $req = "update salle set   numero=:numero,types=:types,lit=:lit, disponible=:disponible where id=:id";

                $param = array(
                    ":numero" => $this->numero,
                    ":types" => $this->types,
                    ":lit"=>$this->lit,
                    ":disponible"=>$this->disponible,
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
            $req = "select *from salle";
            $stmt = $con->prepare($req);
            $stmt->execute();
            $res = $stmt->fetchAll(\PDO::FETCH_CLASS, "app\\DefaultApp\\Models\\Salle");
            return $res;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }
    public static function Rechercher($critere)
    {
        try {
            $con = self::connection();
            $req = "SELECT *FROM salle WHERE numero ='" . $critere . "' or types='" . $critere . "' or lit= '" . $critere . "' ";
            $stmt = $con->prepare($req);
            $stmt->execute();
            $data = $stmt->fetchAll(\PDO::FETCH_CLASS, "app\DefaultApp\Models\Salle");
            return $data;
        } catch (Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    public static function CheckDisponible($id)
    {
        try {
            $con = self::connection();
            $req = "SELECT disponible FROM salle WHERE  numero= '" . $id . "' ";
            $rps = $con->query($req);
            $data = $rps->fetch();
            return $data['disponible'];
        } catch (Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }


    public static function updateDisponibilite($id,$disponible)
    {
        try {
            $con = self::connection();
               $req = "update salle set  disponible=:disponible where numero=:id";

            $param = array(
                ":disponible" => $disponible,
                ":id" => $id
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

}