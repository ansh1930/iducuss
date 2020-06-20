<?php

$server= "localhost";
$user="root";
$pass="";
$DB="iducuss";



$result  = mysqli_connect($server,$user,$pass,$DB);

if ($result) {
    // echo "connnection created";
    # code...
}
else{
    echo "not connected";
    exit();
}





?>