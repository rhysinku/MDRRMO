<?php

$server = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "mdrrmo_db";

$conn = mysqli_connect($server, $dbusername, $dbpass, $dbname);

if(!$conn)
{
    die(" Failed: " .mysqli_connect_error());
}
