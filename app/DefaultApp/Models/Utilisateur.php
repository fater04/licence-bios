<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/22/2019
 * Time: 9:50 PM
 */

namespace app\DefaultApp\Models;

class Utilisateur extends \systeme\Model\Utilisateur
{
    public static function nonUtilisateur($id)
    {
        $con = self::connection();
        $req = "SELECT nom,prenom FROM utilisateur WHERE id='" . $id . "'";
        $res = $con->query($req);
        $data = $res->fetch();
        return $data['nom'] . " " . $data['prenom'];
    }
    public static function Rechercher_All($critere)
    {
        try {
            $con = self::connection();
            $req = "SELECT *FROM utilisateur WHERE id='" . $critere . "' OR pseudo='" . $critere . "' OR email like '%" . $critere . "%' OR telephone like '%" . $critere . "%'OR nom like '%" . $critere . "%'OR prenom like '%" . $critere . "%' OR role like '%" . $critere . "%'";

            $stmt = $con->prepare($req);
            $stmt->execute();
            $data = $stmt->fetchAll(\PDO::FETCH_CLASS, "systeme\Model\Utilisateur");
            return $data;
        } catch (Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

}