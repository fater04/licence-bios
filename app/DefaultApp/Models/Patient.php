<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/28/2019
 * Time: 1:28 PM
 */

namespace app\DefaultApp\Models;


use systeme\Model\Model;

class Patient extends Model
{
    private $id;
    private $code;
    private $nom;
    private $prenom;
    private $nom_mere;
    private $adresse;
    private $email;
    private $profession;
    private $sexe;
    private $date_naissance;
    private $cin;
    private $telephone;
    private $statut_matrimonial;
    private $groupe_sanguin;

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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNomMere()
    {
        return $this->nom_mere;
    }

    /**
     * @param mixed $nom_mere
     */
    public function setNomMere($nom_mere)
    {
        $this->nom_mere = $nom_mere;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $profession
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getStatutMatrimonial()
    {
        return $this->statut_matrimonial;
    }

    /**
     * @param mixed $statut_matrimonial
     */
    public function setStatutMatrimonial($statut_matrimonial)
    {
        $this->statut_matrimonial = $statut_matrimonial;
    }

    /**
     * @return mixed
     */
    public function getGroupeSanguin()
    {
        return $this->groupe_sanguin;
    }

    /**
     * @param mixed $groupe_sanguin
     */
    public function setGroupeSanguin($groupe_sanguin)
    {
        $this->groupe_sanguin = $groupe_sanguin;
    }

    private static function patientExiste($nom, $prenom,$date_naissance,$cin)
    {
        $con=self::connection();
        if($cin==""){
            $req = "SELECT *FROM patient WHERE (nom='" . $nom . "' AND prenom='" . $prenom . "'  AND date_naissance='" . $date_naissance . "')";

        }else{
            $req = "SELECT *FROM patient WHERE (nom='" . $nom . "' AND prenom='" . $prenom . "'  AND date_naissance='" . $date_naissance . "') or cin='".$cin."'";
        }
        $rs = $con->query($req);
        if ($rs->fetch()) {
            return true;
        } else {
            return false;
        }
    }
    public static function codePatientExiste($code)
    {
        $con = new DbConnection();
        $con = $con->Connection();
        $req = "SELECT *FROM patient WHERE code='" . $code . "'";
        $rs = $con->query($req);
        if ($rs->fetch()) {
            $con = null;
            return true;
        } else {
            $con = null;
            return false;
        }
    }
    private function validerInformation(){

        if($this->nom=="" or !preg_match("#^[a-z-A-Z ]+$#",$this->nom)){
            return "nom incorrect";
        }

        if($this->prenom=="" or !preg_match("#^[a-z-A-Z ]+$#",$this->prenom)){
            return "prénom incorrect";

        }

        if($this->nom_mere=="" or !preg_match("#^[a-z-A-Z ]+$#",$this->nom_mere)){
            return "nom mère incorrect";
        }

        /*if(!preg_match("#^[ a-z A-Z ]+$#",$this->profession)){
            return "profession incorrect";
        }*/

        if(!\app\DefaultApp\DefaultApp::validerDate($this->date_naissance,"d/m/Y")){
            return "entrer une date correct";
        }

        if( \app\DefaultApp\DefaultApp::calculAge(explode("/",$this->date_naissance)[2])<=0){
            return "entrer une date correct";
        }


        return true;
    }
    public static function idPatient($code)
    {
        $con=self::connection();
        $req = "SELECT *FROM patient WHERE code='" . $code . "'";
        $rs = $con->query($req);
        if ($date = $rs->fetch()) {
            $con = null;
            return $date['id'];
        } else {
            $con = null;
            return "";
        }
    }
    public function enregistrer(){
        try{
            if(self::patientExiste($this->nom,$this->prenom,$this->date_naissance,$this->cin)){
                return "Patient existe sur le systeme...";
            }
            $v=self::validerInformation();

            if($v==1){
                $con=self::connection();
                $req="insert into patient (
               code,nom,prenom,nom_mere,adresse,email,profession,sexe,date_naissance,cin,telephone,statut_matrimonial,groupe_sanguin) VALUES
              (:code,:nom,:prenom,:nom_mere,:adresse,:email,:profession,:sexe,:date_naissance,:cin,:telephone,:statut_matrimonial,:groupe_sanguin)";

                $param=array(
                    ":code"=>$this->code,
                    ":nom"=>$this->nom,
                    ":prenom"=>$this->prenom,
                    ":nom_mere"=>$this->nom_mere,
                    ":adresse"=>$this->adresse,
                    ":email"=>$this->email,
                    ":profession"=>$this->profession,
                    ":sexe"=>$this->sexe,
                    ":date_naissance"=>$this->date_naissance,
                    ":cin"=>$this->cin,
                    ":telephone"=>$this->telephone,
                    ":statut_matrimonial"=>$this->statut_matrimonial,
                    ":groupe_sanguin"=>$this->groupe_sanguin

                );

                $stmt=$con->prepare($req);
                if($stmt->execute($param)){
                    return "ok";
                }elsE{
                    return "no";
                }

            }else{
                return $v;
            }

        }catch (\Exception $ex){
            return $ex->getMessage();
        }
    }
    public static function lister(){
        try{
            $con=self::connection();
            $req="select *from patient";
            $stmt=$con->prepare($req);
            $stmt->execute();
            $res=$stmt->fetchAll(\PDO::FETCH_CLASS,"app\\DefaultApp\\Models\\Patient");
            return $res;
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }
}