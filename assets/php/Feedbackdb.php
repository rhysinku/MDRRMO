<?php 

require_once 'connectdb.php';

$userid = $_POST['userid'];
$comment = $_POST['comment'];
$rating = $_POST['rating'];


$sql = "INSERT INTO feedback(userid, feedbackComment, feedbackRating) VALUES ('$userid', '$comment', '$rating')";

if(mysqli_query($conn,$sql))
{

    header("location: ../../index.php?Success=FeedbackUpload");
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}