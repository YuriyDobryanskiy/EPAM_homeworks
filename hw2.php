<!doctype html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>EPAM HW#2</title>

</head>
    <?php
        require "function.php";
	?>

    <div class="wrapper">
    <?php
        #1
        $strTask1 = new stringTasks;
        echo 'var_test_text => ', $strTask1->createNewStr("_", 'var_test_text'), "<hr>";

        #2
        $strTask2 = new stringTasksCyril;
        echo 'ФЫВА олдж => ', $strTask2->strInArr(' ', 'ФЫВА олдж'), "<hr>";

        #3
        $a = array(342, 55, 33, 123, 66, 63, 9);
        echo 'Числа в яких є 3: '. implode(', ', valueSearch($a, '3')), "<hr/>";

        #4
        $a = array(342, 55, 33, 123, 66, 63, 9);
        echo 'Трійок в масиві: '. array_sum(valueCount($a, '3')), "<hr/>";

        #6
        echo 'ATTGC => '.convert('ATTGC'),"<br/>";
        echo 'GTAT => '.convert('GTAT'),"<hr/>";

        #5
        echo bandName('dolphin'),"<br/>";
        echo bandName('alaska'),"<br/>";
        echo bandName('europe'),"<br/>";

    ?>
    </div>
    </body>
</html>