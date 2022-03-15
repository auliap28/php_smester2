<?php
    function kelulusan($rata_rata){
        if ($rata_rata <= 55){
                return "Tidak Lulus";
        }else{
                return "Lulus";
            }
        }

    function grade($rata_rata){
        if ($rata_rata >= 85){
            return "A";
        }
        elseif ($rata_rata >= 70){
            return "B";
        }
        if ($rata_rata >= 56){
            return "C";
        }
        elseif ($rata_rata >= 36){
            return "D";
        }
        if ($rata_rata >= 5){
            return "E";
        } else {
            return "Tidak Ada Nilai";
        }
    }

    function predikat($rata_rata){
        swtich($grade){
            case "A" :
                return "Sangat Memuaskan";
                break;
            case "B" :
                return "Memuaskan";
                break;
            case "C" :
                return "Cukup";
                break;
            case "D" :
                return "Kurang";
                break;
            case "E" :
                return "Sangat Kurang";
                break;    
            case "I" :
                return "Tidak ada";
                break; 
        }
    }
?>