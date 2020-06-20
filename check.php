<?php
    session_start();
    if(isset($_SESSION['user'])){
        // if ($_SERVER['REQUEST_METHOD']  == 'GET') {
        //     $forumid= $_GET['ID'];
        //     // echo $forumid;
        //     # code...
        //   }
        // header("Location:forum.php/");
        include("forum.php");
    }
    else{
      echo "<h1>please login first</h1>";
    }
    ?>