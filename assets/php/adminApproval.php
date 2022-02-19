<?php
include_once 'connectdb.php';


if(!$conn)
{
    die(" Failed: " .mysqli_connect_error());
}

if(isset($_GET['trainingApprove']))
{
    $id = $_GET['trainingApprove'];
 $trainapprove = "UPDATE training set trainingAdminPermision = 'Approve' WHERE trainingID = '$id' ";


 if (mysqli_query($conn,$trainapprove)) {
 header("location: ../../adminTraining.php?Success=AdminAprove");
}
else
{
    header("location: ../../adminTraining.php?error=AdminAproveError");
}
}

if(isset($_GET['trainingDecline']))
{
    $id = $_GET['trainingDecline'];
    $traindec = "UPDATE training set trainingAdminPermision = 'Decline' WHERE trainingID = '$id' ";

    if (mysqli_query($conn,$traindec)) {
        header("location: ../../adminTraining.php?Success=AdminDeclineAprove");
       }
       else
       {
           header("location: ../../adminTraining.php?error=AdminDeclineError");
       }
}