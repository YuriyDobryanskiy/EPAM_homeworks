<?php
/*
* 1. Підключення до BD
* 2. Виведення в функції
* 3. function global var;
* 4. Отримання кук після перезагрузки
*/
function search($word){
    $searchWord = explode(" ", htmlspecialchars($word));
    $querySerch = '';

    foreach($searchWord as $key=>$value){
        if ($key>0){
            $querySerch .= ' OR ';
        }
        //$querySerch .= '`name` LIKE "%'.$value.'%" OR `poster` LIKE "%'.$value.'%"';    
        $querySerch .= '`name` LIKE "%'.$value.'%"';  
    }
    return $querys = "SELECT * FROM books_list WHERE $querySerch";
}


class BookList{
    function getPaginationBookList($books_on_page){
        global $link;
        $result = $link->query('SELECT * FROM books_list');
        //var_dump($result);

        //number of page
        global $num_page;         
        $num_page = ceil($result->num_rows/$books_on_page);

        //current page
        (!isset($_GET['page'])) ? $page = 1 : $page = $_GET['page'];

        //page first result     
        $page_first_result = ($page-1) * $books_on_page;

        return $page_first_result;
    }

    function getFullBookList($first_position, $books_on_page){
        global $link; 
        $one_result = $link->query("SELECT * FROM books_list LIMIT $first_position, $books_on_page");
            //outpoot list
        while( $row = $one_result->fetch_assoc() ){ 
             $arrOfBooks[] = $row;           
        }        
        return $arrOfBooks;       
    }

    function getSortedBookList($first_position, $books_on_page, $order){
        global $link; 
        $one_result = $link->query("SELECT * FROM books_list ORDER BY $order LIMIT $first_position, $books_on_page");
            //outpoot list
        while( $row = $one_result->fetch_assoc() ){ 
             $arrOfBooks[] = $row;           
        }        
        return $arrOfBooks;       
    }


}

function returnArrOfTags(){
    global $link;
    $result = $link->query("SELECT * FROM tags");
    $tagsArr=[];
    while( $row = $result->fetch_assoc() ){
        $tagsArr[] = [ 'id' => $row['id'], 'tag' => $row['tag'] ];
    }
    return $tagsArr;
}


function returnArrOfBooks($tag){
    global $link;
    $result = $link->query("SELECT books_list.ISBN, books_list.name, books_list.url, books_tag.ISBN, books_tag.tag, tags.id, tags.tag
        FROM books_list 
        INNER JOIN books_tag ON books_list.ISBN=books_tag.ISBN
        INNER JOIN tags ON books_tag.tag=tags.id
        WHERE books_tag.tag = $tag");
    $booksArr=[];
    while( $row = $result->fetch_assoc() ){
        //var_dump($row);
        $booksArr[] = [ 'ISBN' => $row['ISBN'], 'name' => $row['name'], 'url' => $row['url'], 'tag' => $row['tag'] ];
    }
    return $booksArr;
}


function getSortedBookList($title){
    global $link;
    $result = $link->query("SELECT * FROM books_list ORDER BY $title");
    while( $row = $result->fetch_assoc() ){
        $booksArr[] = [ 'ISBN' => $row['ISBN'], 'name' => $row['name'], 'price' => $row['price'] ];
    }
    return $booksArr;
}


























/*
      $array23 = ['11','12','13'];

      function showElements($arr, $callback){
        foreach ($arr as $r1){
          $callback($r1);
        }
      }

      showElements($array23, function($x){
        echo $x+10,"<br/>";          
      });
*/







?>