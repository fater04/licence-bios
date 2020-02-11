<?php
require_once "../../../vendor/autoload.php";
if (isset($_GET['no'])) {
    $no = addslashes($_GET['no']);
    $salle = \app\DefaultApp\Models\Salle::CheckDisponible($no);
    if ($salle <=0) {
        echo "Salle non disponible";
    }else{
        echo "ok";
    }

}