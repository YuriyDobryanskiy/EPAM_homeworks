<?php
      //$link = new mysqli('localhost', 'root', '', 'books') or die (mysqli_error($link));
      $link = new mysqli('localhost', 'root', '', 'books') or die (mysqli_error($link));
      
      /* check connection */
      if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
      }
?>