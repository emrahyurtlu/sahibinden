<?php

// phpinfo();

setlocale(LC_TIME, 'tr_TR');
$host = "aa1t42guxrjsjjn.czkb7r3wcndo.eu-west-3.rds.amazonaws.com"; // root
//$host="172.17.02";
$port = 3306;
$user = "root";
$password = "rootroot"; // root
$dbname = "sahibinden";

$conn = mysqli_connect($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server: ' . mysqli_connect_error());
mysqli_set_charset ( $conn , "utf8");

//$con->close();

// mysqli_close($conn);
?>