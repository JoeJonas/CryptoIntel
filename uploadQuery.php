<?php

$servername = "localhost";
$username = "dredknaut";
$password = "toor";
$database = "crypto";

$sql1 = "LOAD DATA LOCAL INFILE '/home/dredknaut/Programming/Bash/CryptIntel/CryptoIntel.csv'
INTO TABLE coinData
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES;";

$con=mysqli_connect($servername,$username,$password,$database);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

$result = mysqli_query($con, $sql1);

mysqli_close($con);

?>
