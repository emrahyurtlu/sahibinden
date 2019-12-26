<?php
/*$conn = mysqli_connect('localhost', 'root', 'root', 'sahibinden');
print_r(mysqli_num_rows());
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/


$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="root";
$dbname="sahibinden";
$conn = mysqli_connect($host, $user, $password, $dbname, $port, $socket)
or die ('Could not connect to the database server: ' . mysqli_connect_error());
mysqli_set_charset ( $conn , "utf8");
//$con->close();

// mysqli_close($conn);
?>