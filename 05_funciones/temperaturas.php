<?php
    //  vamos a crear una funcion que reciba la temperatura, la unidad
    //  inicial y la final, y devuelva la temperatura final

    function convertirTemperatura($temperaturaInicial, $unidadInicial, $unidadFinal) {
        $temperaturaFinal = $temperaturaInicial;

        if($unidadInicial == "C") {
            if($unidadFinal == "K") {
                $temperaturaFinal = $temperaturaInicial + 273.15;
            } elseif($unidadFinal == "F") {
                $temperaturaFinal = ($temperaturaInicial * (9/5)) + 32;
            }
        } elseif($unidadInicial == "K") {
            if($unidadFinal == "C") {
    
            } elseif($unidadFinal == "F") {
    
            }
        } elseif($unidadInicial == "F") {
            if($unidadFinal == "C") {
                
            } elseif($unidadFinal == "K") {
    
            }
        }
        return $temperaturaFinal;
    }
?>