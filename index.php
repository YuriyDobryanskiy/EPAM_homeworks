<!doctype html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>EPAM L#1</title>

</head>
    <?php
        require "function.php";
	?>

    <div class="wrapper">
    <?php
        #1
        $text1='Hello';
        $text2='World';
        echo "$text1 $text2", "<hr/>";

        #2
        $var = 'hello';
        $len = strlen($var) - 1;
        echo "$var[0]", "<br/>", "$var[1]", "<br/>", "$var[$len]", "<hr/>";

        #3
        $a = array(-5, 0, -3, 2);
        foreach ($a as $aa) {
            echo (onlyInt($aa) > 0 && onlyInt($aa) < 5) ? "Вірно <br/>" : "Невірно <br/>";	
        }
        echo "<hr/>";

        #4
        echo checkQuarter( onlyInt(55) ), "<br/>";
        echo checkQuarter( onlyInt(20) ), "<br/>";
        echo "<hr/>";

        #5
        echo leapYear( onlyInt(2008) );
        echo leapYear( onlyInt(1922) );
        echo "<hr/>";

        #6
        echo "Сума перших 3 чисел = сумі других 3 чисел:<br/>";
        echo 'число 149720 - '.checkNumber( onlyInt(149720) );
        echo 'число 123321 - '.checkNumber( onlyInt(123321) );
        echo "<hr/>";

        #7      http://www.asciitable.com/
        $EQ = new asciiSum;
        echo $EQ->do_asciiSum("AD", "BC");
        echo $EQ->do_asciiSum("AD", "DD");
        echo $EQ->do_asciiSum("gf", "FG");
        echo $EQ->do_asciiSum("zz1", "");
        echo $EQ->do_asciiSum("ZzZz", "ffPFF");
        echo $EQ->do_asciiSum("kl", "lz");
        echo $EQ->do_asciiSum(null, "");
        echo "<hr/>";

        ?>
    </div>
    </body>

</html>