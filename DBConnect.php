<?php

#DBConnect.php
$host = mytestserver1.mysql.database.azure.com';
$username = 'vasulg';
$password = 'Flinders@';
$db_name = 'comp9710';
$conn = mysqli_init();

mysqli_ssl_set($conn, NULL, NULL, ""/var/www/html/DigiCertGlobalRootG2.crt.pem"", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
} 
?>
