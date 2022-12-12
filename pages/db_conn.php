<?php 
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","fully_natural");

// connection to database
$conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

if(!$conn)
    echo("Connect failed");


?>