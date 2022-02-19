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

    <div style="padding: 52px;">
        <h1>Schedule Training</h1>
        <form method="post" action="assets/php/Trainingdb.php" style="padding: 18px;">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr style="border-style: none;">
                            <th>
                                <p>Leader Name</p><input class="form-control" name="leader" type="text" required>
                            <input type="hidden" name="userid" value="<?php echo $_SESSION['userID']?>">
                            </th>
                            <th>
                                <p>No. of Participant</p><input class="form-control" name="participant" type="text" required>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Schedule Date</p><input class="form-control" name="date" type="date" required>
                            </td>
                            <td>
                                <p>Type of Training</p>
                                <div class="form-check"><input class="form-check-input" type="radio" value="BLS/BFA" id="formCheck-1" name="typeTraining" checked><label class="form-check-label" for="formCheck-1">BLS/BFA</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" value="BMC" id="formCheck-2" name="typeTraining"><label class="form-check-label" for="formCheck-1">BMC</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" value="WASSAR" id="formCheck-3" name="typeTraining"><label class="form-check-label" for="formCheck-1">WASSAR</label></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Email</p><input class="form-control" name="email" type="text" required>
                            </td>
                            <td>
                                <p>Contact Number</p><input class="form-control" name="num" type="text"  required>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <p>Reason:</p><textarea  name="reason" class="form-control" required></textarea>
            </div>
            <div>
                <p>Location:</p><textarea name= "location" class="form-control" required></textarea>
            </div>
            <div class="d-flex justify-content-center" style="margin: 11px;">
                <div><a class="btn btn-primary btn-lg" role="button" href="#myModal" data-bs-toggle="modal">Continue</a>
                    <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>Schedule Training</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center text-muted">The administrator will contact your number or email for some update.</p>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Send</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <footer style="height: 113px;background: linear-gradient(97deg, rgb(244,110,34), rgb(225,85,25));">
        <div style="padding: 21px;">
            <h4 style="text-align: center;">MDRRMO Rescue Team</h4><span class="d-flex justify-content-center">@2021 Team Sakristan</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>