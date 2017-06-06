<?php 

	// config database
    $host = "127.0.0.1";
    $username = "root";
    $password = "ro10@app";
    $dbname = "contact_test";

    $mysqli = mysqli_connect($host,$username,$password,$dbname);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $mysqli->set_charset('utf8');

?>