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
    <div style="text-align: center;margin: 13px;">
        <h1 style="font-family: Alatsi, sans-serif;color: rgb(247,89,40);">About us</h1>
        <p style="margin: 35px;font-family: Alatsi, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
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
                                        <h3 class="name-imagia">John Doe</h3>
                                        <p class="subtitle-imagia">Subtitle </p>
                                        <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves.</em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Lorem Ipsum</h3>
                                            <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
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
                                    <div class="user-imagia"><img class="img-circle" alt="" src="assets/img/a1.jpg"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">John Doe</h3>
                                        <p class="subtitle-imagia">Subtitle </p>
                                        <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves.</em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Lorem Ipsum</h3>
                                            <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
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
                                    <div class="user-imagia"><img class="img-circle" alt="" src="assets/img/a1.jpg"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">John Doe</h3>
                                        <p class="subtitle-imagia">Subtitle </p>
                                        <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves.</em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Lorem Ipsum</h3>
                                            <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
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
                                    <div class="user-imagia"><img class="img-circle" alt="" src="assets/img/a1.jpg"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">John Doe</h3>
                                        <p class="subtitle-imagia">Subtitle </p>
                                        <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves.</em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Lorem Ipsum</h3>
                                            <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
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