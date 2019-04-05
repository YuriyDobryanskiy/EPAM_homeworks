<?php
/*
 * HW#1
 */
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

/*
 * HW#2
 */

class stringTasks
{
    function strExplode($z, $zz){
        $pieces = explode($z, $zz);
        return $pieces;
    }

    function createNewStr($deli, $str){
        $newPieces = array();
        foreach ($this->strExplode($deli, $str) as $key => $piece){
            ($key == 0) ? $newPieces[] = $piece : $newPieces[] = ucfirst ($piece);
        }
        return implode('', $newPieces);
    }
}

class stringTasksCyril extends stringTasks
{
    function strInArr($deli, $str){
        $newArr = array();
        foreach ($this->strExplode($deli, $str) as $key => $piece){
            $wordArr = preg_split('//u', $piece, NULL, PREG_SPLIT_NO_EMPTY); //розбиття слова на кириличні букви
            krsort($wordArr);
            $newArr[] = implode('', $wordArr);
        }
        return implode(' ',$newArr);
    }
}

function valueSearch($a, $number){
    $rez = array();
    foreach ($a as $key => $value){
        (strpos($value, $number, 0) !== false) ? $rez[] = $value : '';
    }
    return $rez;
}

function valueCount($a, $number){
    $rez = array();
    foreach ($a as $key => $value){
        $rez[] = substr_count ($value, $number);
    }
    return $rez;
}

function bandName($string){
    $firstLetter = substr($string, 0,1);
    $lastLetter = substr($string, -1);
    return ($firstLetter != $lastLetter) ? 'The '.ucfirst($string) : ucfirst($string).substr($string, 1);
}

function convert($string){
    $converter = array('A' => 'T', 'T' => 'A', 'C' => 'G', 'G' => 'C');
    return strtr($string, $converter);
}

/*
 * HW#3
 */
function pushArr($y){
    $newArr = array();
    foreach ($y as $piece){
        for($i=1; $i <= $piece; $i++){
            $newArr[] = $piece;
        }
    }
    return implode(', ',$newArr);
}

function threeArr($j){
    $j = array_unique ($j);
    natcasesort($j);
    $outputFirst = array_slice($j, 0, 3);
    $outputLast = array_slice($j, -3);
    $outputMid = array_slice($j, (-(count($j)/2)-2), 3);
    return 'Перші 3 темп. - '.implode(', ',$outputFirst).'; середні 3 темп. - '.implode(', ',$outputMid).'; останні 3 темп. - '.implode(', ',$outputLast);
}



















?>