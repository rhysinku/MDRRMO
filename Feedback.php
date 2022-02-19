<?php 

session_start();
if(isset($_SESSION['userID']))
{
 include_once 'assets/php/userNav.php';
}
else{
    include_once 'assets/php/defaultNav.php';
}
 ?>
    <div style="margin: 121px;">
        <form method="POST" action="assets/php/Feedbackdb.php">
            <input type="hidden" name="userid" value="<?php echo $_SESSION['userID'] ?>" >
            <p style="font-weight: bold;">Give us your comment:</p><textarea name="comment" class="form-control"></textarea>
            <div style="margin: 57px;">
                <p style="font-weight: bold;">Rate our service</p><input id="range" class="form-range form-control" name="rating" type="range" data-bs-toggle="tooltip" data-bss-tooltip="" min="1" max="10" onchange="updateTextInput(this.value);">
        <p class="text-info">Value: <span id="displayrange"></span> </p>
            </div>
            <div class="d-flex justify-content-center" style="margin: 57px;"><button class="btn btn-primary" type="submit" style="width: 89.5px;height: 51px;">Submit</button></div>
        </form>
    </div>

<script>

    var range = document.getElementById("range");
    var value = document.getElementById("displayrange");
    value.innerHTML = range.value;

    range.oninput = function(){
        value.innerHTML = this.value;
    }
    </script>

       
 
    
    <?php include_once 'assets/php/defaultFoot.php'; ?> 