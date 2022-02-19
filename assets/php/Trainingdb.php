<?php 

require_once 'connectdb.php';

$userID = $_POST['userid'];
$leader = $_POST['leader'];
$participant = $_POST['participant'];
$date = date('y-m-d', strtotime($_POST["date"])); 
$typeTraining = $_POST['typeTraining'];
$email = $_POST['email'];
$num = $_POST['num'];
$reason = $_POST['reason'];
$location = $_POST['location'];


$sql = "INSERT INTO training (userID, Leader, Participant, trainingDate, TypeTraining, trainingEmail, Contactnum, trainingReason, trainingLocation ) 
        VALUES('$userID', '$leader' , '$participant', '$date', '$typeTraining', '$email', '$num' , '$reason' , '$location')";
    
   if( mysqli_query($conn, $sql))
   {
    header("location: ../../index.php?Success=TrainingSent");
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }



