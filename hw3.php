<!doctype html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>EPAM HW#3</title>

</head>
    <?php
    require "function.php";
    require "inc/book_inc.php";
	?>

    <div class="wrapper">
    <?php
    #1
    $m = array(1,3,2,4);
    echo (pushArr((array)$m)),"<hr/>";

    #2
    $temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
    echo threeArr($temperatures),"<hr/>";

    #3
    $newBook = new codingBooks($books);
    $sortPrice = $newBook->getPrice($books);
    $newBook->infoOut($sortPrice, 'name', 'Price');
    echo "<hr/>";

    $phpBooks = $newBook->getPhp($books,"php");
    $newBook->infoOut($phpBooks, 'name', 'Tag');
    echo "<br/>";
    $jsBooks = $newBook->getPhp($books,"javascript");
    $newBook->infoOut($jsBooks, 'name', 'Tag');
    echo "<hr/>";

    #4
    echo indexN(array(1,2,3,4,3,2,1)),"<br/>";
    echo indexN(array(1,100,50,-51,1,1)),"<br/>";
    echo indexN(array(20,10,-80,10,10,15,35)),"<br/>";
    echo indexN(array(10,-80,10,10,15,35)),"<br/>";
    echo "<hr/>";

    #5
    $uniqValue = new uniqueValue;
    echo $uniqValue->uniqNumber(array(1, 1, 1, 2, 1, 1)),"<br/>";
    echo $uniqValue->uniqNumber(array(0, 0, 0.55, 0, 0)),"<br/>";
    echo $uniqValue->uniqNumber(array(3,1,5,3,7,4,1,5,7)),"<br/>";


    ?>
    </div>
    </body>
</html>