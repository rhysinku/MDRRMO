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
    <div class="d-flex" style="margin: 30px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="border-style: none;">
                            <h1><?php echo $_SESSION['user']?></h1>
                            <p>Account ID:&nbsp;<span><?php echo $_SESSION['userID'] ?></span></p>
                        </th>
                    </tr>
                </thead>
                <tbody style="border-style: none;">
                <?php 
                $id = $_SESSION['userID'];
                $profile = $conn->query("SELECT * FROM user WHERE userID = '$id'"); 
                while($row = $profile->fetch_assoc()):
               
                ?>

                    <tr style="border-style: none;">
                        <td>
                            <p>Name:&nbsp;<span style="font-weight: bold;color: rgb(241,106,32);"><?php echo $row['fname'] ?></span><span>&nbsp;</span><span style="font-weight: bold;color: rgb(241,106,32);"><?php echo $row['lname']?></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Email:&nbsp;<span style="font-weight: bold;color: rgb(241,106,32);"><?php echo $row['email'] ?></span></p>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center" style="margin: 33px;padding: -1px;">
        <h1>Schedule Training History</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr style="font-size: 12px;text-align: center;">
                        <th>Leader</th>
                        <th>Participant</th>
                        <th>Type of Training</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Reason</th>
                        <th>Location</th>
                        <th>Schedule Date</th>
                        <th>Date Modified</th>
                        <th>Admin Permission</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    
                    $train = $conn->query("SELECT * FROM training INNER JOIN user ON training.userID = user.userID WHERE user.userID IN ('$id') ORDER BY training.trainingTimestamp DESC ");
                    
                    while ($trainData = $train->fetch_assoc()):
                        $scheduleDate = date(" F, d, Y",strtotime($trainData['trainingDate']));
                        $traingTimestamp = date ("F, d, Y", strtotime($trainData['trainingTimestamp']));

                    ?>
                    <tr>
                        <td><?php echo $trainData['Leader']?></td>
                        <td><?php echo $trainData['Participant']?></td>
                        <td><?php echo $trainData['TypeTraining']?></td>
                        <td><?php echo $trainData['email']?></td>
                        <td><?php echo $trainData['Contactnum']?></td>
                        <td><?php echo $trainData['trainingReason']?></td>
                        <td><?php echo $trainData['trainingLocation']?></td>
                        <td><?php echo $scheduleDate?></td>
                        <td><?php echo $traingTimestamp?></td>
                        
                        <td>
                            <?php 
                            if($trainData['trainingAdminPermision'] == 'Approve')
                            {
                                $traintext = 'text-success';
                            }
                            elseif ($trainData['trainingAdminPermision'] == 'Pending' )
                            {
                                $traintext = 'text-muted';
                            }
                            else
                            {
                                $traintext = 'text-danger';
                            }
                            ?>
                            <p class="<?php echo $traintext ?>" style="font-weight: bold;"><?php echo $trainData['trainingAdminPermision']?></p>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center" style="margin: 33px;padding: -1px;">
        <h1>Feedback History</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Comment</th>
                        <th>Rating</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $feedback = $conn->query("SELECT * FROM feedback INNER JOIN user on feedback.userid = user.userID WHERE user.userID IN ('$id') ORDER BY feedback.feedbackTimestamp DESC ");
                     
                    while ($feedbackData = $feedback->fetch_assoc()):
                        $feedTimestamp = date("F, d, Y", strtotime($feedbackData['feedbackTimestamp']));
                     ?>
                    <tr>
                        <td><?php echo $feedbackData['feedbackComment']?></td>
                        <td><?php echo $feedbackData['feedbackRating']?> Points</td>
                        <td><?php echo $feedTimestamp ?></td>
                        <td>
                            <?php
                            if($feedbackData['feedbackStatus'] == 'Looking Up')
                            {
                                $feedtext ='text-muted';
                            }
                            else
                            {
                                $feedtext ='text-success';
                            } ?>
                            <p class="<?php echo $feedtext ?>" style="font-weight: bold;"><?php echo $feedbackData['feedbackStatus']?></p>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <?php include_once 'assets/php/defaultFoot.php'; ?> 