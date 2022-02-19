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

<div class="d-flex justify-content-center" style="padding: 30px;">
<h1>Schedule Training List</h1>
</div>
    <div class="d-flex justify-content-center" style="padding: 30px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Leader</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>No. Participant</th>
                        <th>Schedule Date</th>
                        <th>Type of Training</th>
                        <th>Reason</th>
                        <th>Training Location</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    $view = $conn->query("SELECT * FROM training LEFT JOIN user on training.userID = user.userID ORDER BY training.trainingTimestamp DESC");
                    while ($data = $view->fetch_assoc()):

                        $datetimestamp = date(" F, d, Y h:i A",strtotime($data['trainingTimestamp']));
                        $date = date(" F, d, Y h:i A",strtotime($data['trainingDate']));
                    ?>

                    <tr>
                        <td><?php echo $data['username'] ?></td>
                        <td><?php echo $data['Leader'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['Contactnum'] ?></td>
                        <td><?php echo $data['Participant'] ?></td>
                        <td><?php echo $date ?> </td>
                        <td><?php echo $data['TypeTraining'] ?>2</td>
                        <td><?php echo $data['trainingReason'] ?></td>
                        <td><?php echo $data['trainingLocation'] ?></td>
                        <td>
                           <?php if($data['trainingAdminPermision'] == 'Pending'): ?>
                            <div class="d-flex">
                                <a class="btn btn-success"  href="assets/php/adminApproval.php?trainingApprove=<?php echo $data['trainingID']?>">Approve</a>
                                <a class="btn btn-danger" href="assets/php/adminApproval.php?trainingDecline=<?php echo $data['trainingID']?>">Decline</a>
                            </div>
                          <?php else: ?> 
                          <div class="d-flex">
                              <?php if($data['trainingAdminPermision'] == 'Approve')
                            {
                                $traintext = 'text-success';
                            }
                            else
                            {
                                $traintext = 'text-danger';
                            }?>
                          <p class="<?php echo $traintext ?>" style="font-weight: bold;"><?php echo $data['trainingAdminPermision']?></p>
                            </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include_once 'assets/php/defaultFoot.php'; ?> 