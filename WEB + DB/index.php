<?php
if($_POST['tagBook']){
  setcookie ( 'tagBook' , $_POST['tagBook'] , time()+300);
}

//echo "<pre>";
//var_dump($_COOKIE['tagBook']);
//echo "</pre>";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Hello, EPAM HW4!</title>
       
    <link rel="stylesheet" type="text/css" href="css/main.css">    
    <?php
        require_once ('lib/conn.php');
        include ('lib/function.php');
    ?>
  </head>

  <body>
    <header>
      <h1>Menu</h1>
      <form action="<?=$_SERVER['REQUEST_URI']?>" method="GET">
        <input type="text" placeholder="Search" name="seachWords">
        <input type="submit" value="Seach">
      </form>
    </header>
    <aside>
      <h1>Pages</h1>
    </aside>
    <main>
      <?php
      ///////////////////////////Search block

      if (isset($_GET['seachWords']) && ($_GET['seachWords'])!=''){
        echo "<h1>Search results:</h1>";
        if ($search_result = $link->query(search($_GET['seachWords']))) {
          if ($search_result->num_rows == 0) {
            echo "Nothing found";
          }else{
            while( $row = $search_result->fetch_assoc() ){
              echo "<a href='{$row['url']}' target='_blank'>{$row['name']}</a>", "<br/>";
            }  
          }
        }else{
          echo "Error with query";
        }
      echo "<hr/>";       
      }
      
      ////////////////////////////Pagination + Sort
      echo "<h1>Books list:</h1>";
      $books_on_page = 4;
      $bookQuery = new BookList();
      $resultBookList = $bookQuery->getPaginationBookList($books_on_page);

      echo "<table><tr><th>ISBN</th><th><a href='?sort=name'>Name</a></th><th><a href='?sort=price'>Price</a></th></tr>";      
      if( isset($_GET['sort']) ){
        $sortedBookList = $bookQuery->getSortedBookList($resultBookList, $books_on_page, $_GET['sort']);  
        foreach ($sortedBookList as $book){
          echo "<tr><td>{$book[ISBN]}</td><td>{$book[name]}</td><td>{$book[price]}</td></tr>";
        }
      }else{
        $fullBookList = $bookQuery->getFullBookList($resultBookList, $books_on_page);
        foreach ($fullBookList as $book){
          echo "<tr><td>{$book[ISBN]}</td><td>{$book[name]}</td><td>{$book[price]}</td></tr>";
        }        
      }
      echo "</table>";

      ////////////////////////////navigation
      echo "<hr/>";
      for($page = 1; $page <= $num_page; $page++){
         echo (isset($_GET['sort'])) ? "<a href='?sort=$_GET[sort]&page=$page'>$page</a>" : "<a href='?page=$page'>$page</a>";
      }
      echo "<hr/>";
      
      ////////////////////////////Tag filter
      ?>

      <form action="" method="post">
        <p>
          <select size="1" name="tagBook">
          <option selected disabled>Select tag</option>
          <?php          
          $tagsArr = returnArrOfTags();
            foreach($tagsArr as $tag){
              echo "<option value=$tag[id]>$tag[tag]</option>";
            }
          ?>
          </select>
        </p>
        <p><input type="submit" value="Filter"></p>
      </form>

      <?php
      $tagBookPost = $_POST['tagBook'];
      $tagBookCookie = (int)$_COOKIE['tagBook'];
    
      if (isset($tagBookPost) && (!empty($tagBookPost))){
        foreach( returnArrOfBooks($tagBookPost) as $book ){
          echo "<p><a href='$book[url]' target='_blank'>Name - $book[name]</a> - $book[tag]</p>";
        }
      }else if($tagBookCookie != null && gettype($tagBookCookie) == 'integer') {
        foreach( returnArrOfBooks($tagBookCookie) as $book ){
          echo "<p><a href='$book[url]' target='_blank'>Name - $book[name]</a> - $book[tag]</p>";
        }
      }else{
        echo "choose book type";
      }     
      echo "<hr/>";

      
      ?>
      
    </main>
  </body>
</html>