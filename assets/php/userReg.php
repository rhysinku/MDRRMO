<?php

require_once 'connectdb.php';

$email = $_POST["email"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$pass= $_POST["pass"];
$uname=$_POST["uname"];
$repass= $_POST["repass"];

if($pass = $repass)
{
    $sql = "INSERT INTO user (username, fname, lname,email,pwd)
                VALUES ('$uname','$fname','$lname','$email','$pass')";
        $conn->query($sql);
        header("Location: ../../index.php?Success=Register");
}
else
{
    header("Location: ../../index.php?error=Success");
}