<!doctype html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>EPAM HW#4</title>

</head>
    <?php
    require "function.php";
    require "inc/book2_inc.php";
	?>

    <div class="wrapper">
    <?php

    $string1 = 'Test string';
    $string2 = 'Тестовий рядок';
    $integer = 23123;
    $float = 32.234;
    $boolean = true;
    $array1 = array("Volvo","BMW","Toyota","Кириличний рядок");
    $array2 = array("Volvo","Toyota","BMW"=>array("X3"=>array("v1","v2"),"X5"));
    $object = new Book;

    class Book {
        function __construct()
        {
            echo "foo";
        }
    };

    $testJson = new Test_PHP_Types;
    $jsonString1 = $testJson->getJsonCode($string1);
    echo "encode type <strong>".gettype($string1)."</strong> to Json - ".$jsonString1,"<br/>";
    $jsonString1_1 = $testJson->getTypeFromJson($jsonString1);
    echo "decode json from <strong>".gettype($string1)."</strong> - ".$jsonString1_1,"<hr/>";

    $jsonString2 = $testJson->getJsonCode($string2);
    echo "encode type <strong>".gettype($string2)."</strong> to Json - ".$jsonString2,"<br/>";
    $jsonString2_1 = $testJson->getTypeFromJson($jsonString2);
    echo "decode json from <strong>".gettype($string2)."</strong> - ".$jsonString2_1,"<hr/>";

    $jsonInteger = $testJson->getJsonCode($integer);
    echo "encode type <strong>".gettype($integer)."</strong> to Json - ".$jsonInteger,"<br/>";
    $jsonInteger_1 = $testJson->getTypeFromJson($jsonInteger);
    echo "decode json from <strong>".gettype($integer)."</strong> - ".$jsonInteger_1,"<hr/>";

    $jsonFloat = $testJson->getJsonCode($float);
    echo "encode type <strong>".gettype($float)."</strong> to Json - ".$jsonFloat,"<br/>";
    $jsonFloat_1 = $testJson->getTypeFromJson($jsonFloat);
    echo "decode json from <strong>".gettype($float)."</strong> - ".$jsonFloat_1,"<hr/>";

    $jsonBoolean = $testJson->getJsonCode($boolean);
    echo "encode type <strong>".gettype($boolean)."</strong> to Json - ".$jsonBoolean,"<br/>";
    $jsonBoolean_1 = $testJson->getTypeFromJson($jsonBoolean);
    echo "decode json from <strong>".gettype($boolean)."</strong> - ".$jsonBoolean_1,"<hr/>";

    $jsonArray1 = $testJson->getJsonCode($array1);
    echo "encode type <strong>".gettype($array1)."</strong> to Json - ".$jsonArray1,"<br/>";
    $jsonArray1_1 = $testJson->getTypeFromJson($jsonArray1);
    echo "decode json from <strong>".gettype($array1)."</strong> - ".$jsonArray1_1,"<br/>";
    var_dump($jsonArray1_1);
    echo "<hr/>";

    $jsonArray2 = $testJson->getJsonCode($array2);
    echo "encode type <strong>".gettype($array2)."</strong> to Json - ".$jsonArray2,"<br/>";
    $jsonArray2_1 = $testJson->getTypeFromJson($jsonArray2);
    echo "decode json from <strong>".gettype($array2)."</strong> - ".$jsonArray2_1,"<br/>";
    var_dump($jsonArray2_1);
    echo "<hr/>";

    $jsonObject = $testJson->getJsonCode($object);
    echo "encode type <strong>".gettype($object)."</strong> to Json - ".$jsonObject,"<br/>";
    $jsonObject_1 = $testJson->getTypeFromJson($jsonObject);
    echo "decode json from <strong>".gettype($object)."</strong> - ".$jsonObject_1,"<hr/>";
    var_dump($jsonObject_1);
    echo "<hr/>";

    /*
     * csv
     */
    $CSVFile = new CsvFile;
    $CSVFile->writeFile($array1);
    var_dump($CSVFile->readFile());


    #1
    //var_dump($books);

    ?>
    </div>
    </body>
</html>