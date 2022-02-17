<?php 

require_once 'connectdb.php';

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM user WHERE username = '$uname' AND pwd = '$pass'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
        $userID = $row['userID'];
        $username = $row['username'];
        session_start();
        $_SESSION['user']=$username;
        $_SESSION['userID'] = $userID;

    }
    header("Location: ../../index.php?Success=LogIn");
}
else
{
    header("Location: ../../Login.php?error=Something Went");
}