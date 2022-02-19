<?php 

require_once 'connectdb.php';

$userid = $_POST['userid'];
$comment = $_POST['comment'];
$rating = $_POST['rating'];
$status = 'Looking Up';


$sql = "INSERT INTO feedback(userid, feedbackComment, feedbackRating, feedbackStatus) VALUES ('$userid', '$comment', '$rating', '$status')";

if(mysqli_query($conn,$sql))
{

    header("location: ../../index.php?Success=FeedbackUpload");
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}