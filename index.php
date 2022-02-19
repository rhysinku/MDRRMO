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
 <script src="https://kit.fontawesome.com/1ead412f4f.js" crossorigin="anonymous"></script>
 <div style="margin: 20px;">
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner" style="height: 715.578px;">
                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/train2.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/banner.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/10.jpg" alt="Slide Image"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <div style="text-align: center;margin: 13px;" >
        <h1 style="font-family: Alatsi, sans-serif;color: rgb(247,89,40);font-size:40px;">ABOUT US</h1>
        <p style="margin: 35px;font-family: Alatsi, sans-serif;font-size:25px;">
        MDRRMO(Municipal Disaster Risk Reduction and Management Office) is a group of people who prepare for and respond to any emergency incident, such as a natural disaster or an interruption of business operations. MDRRMO is common in public service organizations as well as in organizations. This team is generally composed of specific members designated before an incident occurs, although under certain circumstances the 
        team may be an ad hoc group of willing volunteers. </p>
    </div>
    <div>
        <section class="card-section-imagia">
            <h1 style="color: #f75928;">Our team</h1>
            <h2>Argao MDRRMO MEMBERS</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                    <div class="user-imagia"><img class="img-circle" alt="" src="assets/img/a1.jpg"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">Danny Racoma</h3>
    
                                        <p class="text-center"><em>Commander Officer</em></p>
                                        <div style="font-size:50px; text-align:center;">
                                        <i class="fa-brands fa-facebook"></i>
                                        <i class="fa-brands fa-instagram-square"></i>
                                        <i class="fa-brands fa-twitter-square"></i>
                                        </div>
                                        
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div style="background-color:#f16a20" class="back-imagia" >
                                    <div class="content-imagia content-back-imagia">
                                        <div style="color:white; font-size:20px">
                                            <h3 class="text-center">Commander Officer</h3>
                                            <p class="text-center">
                                            The commanding officer has ultimate authority over the unit, and is usually given wide latitude to run the unit as they see fit, within the bounds of military law. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                    <div class="user-imagia"><img class="img-circle" alt="" src="assets/img/a2.jpg"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">Kent Rizon</h3>
                                        <p class="text-center"><em>Chief Executive Officer</em></p>
                                        <div style="font-size:50px; text-align:center;">
                                        <i class="fa-brands fa-facebook"></i>
                                        <i class="fa-brands fa-instagram-square"></i>
                                        <i class="fa-brands fa-twitter-square"></i>
                                        </div>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div  style="background-color:#f16a20" class="back-imagia" >
                                    <div class="content-imagia content-back-imagia">
                                        <div style="color:white; font-size:20px">
                                            <h3 class="text-center">Chief Executive Officer</h3>
                                            <p class="text-center">a chief executive officer’s primary responsibilities 
                                                include making major corporate decisions, managing the overall operations and 
                                                resources of a company, acting as the main point of communication between the board of 
                                                directors and corporate operations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                    <div class="user-imagia"><img class="img-circle" alt="" src="assets/img/a7.jpg"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">Yancy Panganiban</h3>
                                        <p class="text-center"><em>Commander Officer</em></p>
                                        <div style="font-size:50px; text-align:center;">
                                        <i class="fa-brands fa-facebook"></i>
                                        <i class="fa-brands fa-instagram-square"></i>
                                        <i class="fa-brands fa-twitter-square"></i>
                                        </div>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div style="background-color:#f16a20" class="back-imagia" >
                                    <div class="content-imagia content-back-imagia">
                                        <div style="color:white; font-size:20px">
                                            <h3  class="text-center">Yancy Panganiban</h3>
                                            <p class="text-center"> The commanding officer has ultimate authority over the unit, 
                                                and is usually given wide latitude to run the unit as they see fit, 
                                                within the bounds of military law. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                    <div class="user-imagia"><img class="img-circle" alt="" src="assets/img/aa1.jpg"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">Therdy  Montejo</h3>
                                        <p class="text-center"><em>Supervisor</em></p>
                                        <div style="font-size:50px; text-align:center;">
                                        <i class="fa-brands fa-facebook"></i>
                                        <i class="fa-brands fa-instagram-square"></i>
                                        <i class="fa-brands fa-twitter-square"></i>
                                        </div>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div  style="background-color:#f16a20" class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div style="color:white; font-size:20px">
                                            <h3 class="text-center">Supervisor</h3>
                                            <p class="text-center">The supervisor's overall role is to communicate organizational needs, oversee employees' performance, provide guidance, support, identify development needs, and manage the reciprocal relationship between staff and the 
                                                organization so that each is successful. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
<?php include_once 'assets/php/defaultFoot.php'; ?> 