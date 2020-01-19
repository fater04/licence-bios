<?php
/**
 * Created by PhpStorm.
 * User: ALCINDOR LOSTHELVEN
 * Date: 31/03/2018
 * Time: 19:39
 */

namespace app\DefaultApp;
use systeme\Application\Application;
class DefaultApp extends Application
{

    public static function isHeureValide($heure){
        if(stripos($heure, ":") !== false) {
            if (preg_match('#^[0-9]{2}\:[0-9]{2}$#', $heure)) {
                $hrs=explode(":",$heure);
                if($hrs[0]>=24){
                    return false;
                }

                if($hrs[1]>=60){
                    return false;
                }

                return true;
            }
        }
        return false;
    }
}