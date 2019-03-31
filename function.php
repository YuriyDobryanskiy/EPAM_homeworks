<?php
function onlyInt( $x ){
    return intval( $x );
}

function checkQuarter( $q ){
    switch ($q) {
        case 0:
            return "Ви не вказали часу";
        case ($q > '0' && $q <= 14):
            return "$q хв., перша чверть";
        case ($q >= 15 && $q <= 29):
            return "$q хв., друга чверть";
        case ($q >= 30 && $q <= 44):
            return "$q хв., треря чверть";
        case ($q >= 45 && $q <= 59):
            return "$q хв., четверта чверть";
        default:
            return "Ви вказали некоректну к-сть хв. в годтні";
    }
}

function leapYear( $y ){
    return ((($y % 4 == 0) && ($y % 100 != 0)) || ($y % 400 == 0)) ? "Рік $y - високосний <br/>" : "Рік $y - невисокосний <br/>";
}

function checkNumber( $z ){
    $num = 6;
    if( (strlen( $z) < $num) || strlen( $z) > $num ) return "Число повинно складатись з $num чисел";
    else{
        $part1 = substr( $z, 0, $num/2 );
        $part2 = substr( $z, -$num/2 );
        return (numInArray( $part1 ) == numInArray( $part2 )) ? "Так <br/>" : "Ні <br/>";   
    } 
}

function numInArray( $c ){
    $i = 0;
    foreach (str_split( $c ) as $oneNumber){
        $i += $oneNumber;
    }
    return $i;
}


class asciiSum
{
    function do_asciiSum($str1,$str2){
        return ( $this->count_asciiSum(strtoupper($str1)) == $this->count_asciiSum(strtoupper($str2)) ) ? "\"$str1\",\"$str2\" -> equal<br>" : "\"$str1\",\"$str2\" -> not equal <br>";    
    }

    private function count_asciiSum($j){
        $i = 0;
        if (!preg_match('/[0-9]/', $j)){
            foreach (str_split( $j ) as $oneLetter){
                $i += ord ($oneLetter);
            }
        }else{
            $i = 0;
        }
        return $i;    
    }
}


?>