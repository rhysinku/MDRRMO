<?php 

session_start();
if(isset($_SESSION['userID']))
{
    if($_SESSION['userID'] ==8)
{
    include_once 'assets/php/adminNav.php';
}
else{
    include_once 'assets/php/userNav.php';
}
}
else{
    include_once 'assets/php/defaultNav.php';
}
 ?>
 <div class="d-flex justify-content-center" style="padding: 50px;">
 <h1>Feedback</h1>
 </div>
    <div class="d-flex justify-content-center" style="padding: 50px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Comment</th>
                        <th>Rating</th>
                        <th>Date</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $view = $conn->query("SELECT * FROM feedback LEFT JOIN user on feedback.userID = user.userID");
                    while ($data = $view->fetch_assoc()):
                        $datestamp = date(" F, d, Y h:i A",strtotime($data['feedbackTimestamp'])) ;
                    ?>
                    <tr>
                        <td><?php echo $data['username'] ?></td>
                        <td><?php echo $data['feedbackComment'] ?></td>
                        <td><?php echo $data['feedbackRating'] ?> Points</td>
                        <td> <?php echo $datestamp ?></td>
                        <td>
                            <?php if($data['feedbackStatus'] == 'Looking Up'): ?>
                            <div class="d-flex">
                            <a class="btn btn-success" href="assets/php/adminFeedback.php?Consider=<?php echo $data['feedbackID'] ?>" >Consider</a>
                            <a class="btn btn-danger" href="assets/php/adminFeedback.php?Delete=<?php echo $data['feedbackID'] ?>" >Delete</a>
                        </div>
                            <?php else: ?>    
                                <div class="d-flex">
                                <p class="text-success" style="font-weight: bold;"><?php echo $data['feedbackStatus']?></p>
                        </div>
                        <?php endif; ?>
                        </td>
                        <?php endwhile ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
<?php include_once 'assets/php/defaultFoot.php'; ?> 