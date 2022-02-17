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
    <div class="justify-content-center align-items-center align-content-center" style="margin: 2px;padding: 26px;">
        <div class="container-fluid d-flex justify-content-center align-items-center align-content-center">
            <div class="row g-0 row-cols-3">
                <div class="col-11 d-flex flex-row" style="margin: 12px;padding: 0;">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div style="width: 100%;"><img src="assets/img/a.jpg" style="width: 100%;"></div>
                                <h4 class="card-title">Title</h4>
                                <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 d-flex flex-row" style="margin: 12px;padding: 0;">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div style="width: 100%;"><img src="assets/img/79231718_2536937276590479_6528822727732625408_n.jpg" style="width: 100%;"></div>
                                <h4 class="card-title">Title</h4>
                                <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 d-flex flex-row" style="margin: 12px;padding: 0;">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div style="width: 100%;"><img src="assets/img/train3.jpg" style="width: 100%;"></div>
                                <h4 class="card-title">Title</h4>
                                <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="height: 113px;background: linear-gradient(97deg, rgb(244,110,34), rgb(225,85,25));">
        <div style="padding: 21px;">
            <h4 style="text-align: center;color: rgb(255,255,255);">MDRRMO Rescue Team</h4><span class="d-flex justify-content-center" style="color: rgb(255,255,255);">@2021 Team Sakristan</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>