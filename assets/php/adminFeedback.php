<?php 

include_once 'connectdb.php';

if(isset($_GET['Consider']))
{
    $id = $_GET['Consider'];
    $consider= "UPDATE feedback set feedbackStatus = 'Consider' WHERE feedbackID = '$id'";
if(mysqli_query($conn,$consider))
{
    header("location: ../../AdminFeedback.php?Success=Considered");
}
else
{
    header("location: ../../AdminFeedback.php?Error=Considered");
}
}

if(isset($_GET['Delete']))
{
    $id = $_GET['Delete'];
    $delete = "DELETE FROM feedback WHERE feedbackID = '$id'";
if(mysqli_query($conn,$delete))
{
    header("location: ../../AdminFeedback.php?Error=Delete");
}
}