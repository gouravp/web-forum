<?php
//connect.php
$servername = "localhost";
$username = "root";
$password = "123456";
 $con=mysqli_connect($servername,$username,$password,"PRAGATI");
try {
    $conn = new PDO("mysql:host=$servername;dbname=PRAGATI", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
