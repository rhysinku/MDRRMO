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
   <style>
     .carousel {
    position: absolute;
    width: 45%;
    top:auto;
     }
    .cpr{
     width:50%;
     font-size:20px;
     margin-left:600px;
    }
    .bdg{
        margin:0;
        right:10px;
        position:relative;
        left:30px;
        width:800px;
        font-family:verdana; 

    }
    .ck{
     width:50%;
     font-size:18px;
     margin-left:600px;
    }
  .fa-cpr{
      padding:20px;
      text-align:center;
      background-color:#FFB533;
      color:white;
  }
  .fa-bdg{
      padding:20px;
      text-align:center;
      background-color:#FFB533;
      color:white;
  }
  .fa-ck{
      padding:20px;
      text-align:center;
      background-color:#FFB533;
      color:white;
  }
 </style>
 <div class="fa-cpr">
     <h1>FIRST AID: Cardiopulmonary Resuscitation</h1>
 </div>
     <div style="margin: 20px;  " >
        <div style="" class="carousel slide" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner" style="width: 500px; height:40%;  box-shadow: 10px 10px 10px 10px #888888;">
                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/cpr1.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/cpr2.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/cpr3.jpg" alt="Slide Image"></div>
            
            </div>
            <div>
                <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a>
           </div>
            <ol class="carousel-indicators" >
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
            </ol>
        </div>
        <div class="cpr">
             <h1>CPR</h1>
            <p>Cardiopulmonary resuscitation (CPR) is an emergency procedure that can help save a person's life if their breathing or heart stops. When a 
                person's heart stops beating, they are in cardiac arrest. During cardiac arrest, 
                the heart cannot pump blood to the rest of the body, including the brain and lungs.</p>
                <h1><em>Why CPR important?</em></h1>
                <p>Keeping the blood flow active -even partially - extends the opportunity 
                    for a successfull resuscitation once trained medical staff arrive on site.
                </p>
                <p>
                    CPR is a critical step in the AHA'S Chain of survival . The term Chain of survival 
                    provides a useful metaphor for the elements of the ECC systems concept.
                </p>
        </div>
        <hr style="font-weight:50px; opacity:10; margin-top:50px;"></hr>
        <div class="fa-bdg">
     <h1>FIRST AID: Bandaging</h1>
 </div>
        <div style="margin: 20px;  " >
        <div style="" class="carousel slide" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner" style="width: 500px; height:40%; display:absolute; left:120%; box-shadow: 10px 10px 10px 10px #888888; margin-top:50px;">
                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/bdg1.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/bdg2.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/bdg3.jpg" alt="Slide Image"></div>
            
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
            </ol>
           
        </div>
    </div>
    
        <!--second div-->
        <div class="bdg">
             <h1>Bandage</h1>
            <p>Covering a break in the skin helps to control bleeding and protect against infection. Dressings are pads of gauze or cloth that can be placed directly against the wound to absorb blood and other fluids.
                 Cloth bandages cover dressings and hold them in place.</p>
                <h1>Steps </h1>
                <p>Keeping the blood flow active -even partially - extends the opportunity 
                    for a successfull resuscitation once trained medical staff arrive on site.
                </p>
                <p>
                    CPR is a critical step in the AHA'S Chain of survival . The term Chain of survival 
                    provides a useful metaphor for the elements of the ECC systems concept.
                </p>
        </div>
        <hr style="font-weight:50px; opacity:10; margin-top:140px;">
        <div class="fa-ck">
     <h1>FIRST AID: Choking</h1>
 </div>
        <div style="margin: 20px;  " >
    </div>

     
        <!--third div-->
        <div style="margin: 20px;  " >
        <div style="" class="carousel slide" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner" style="width: 500px; height:40%;  box-shadow: 10px 10px 10px 10px #888888;">
                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/ck1.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/ck2.jpg" alt="Slide Image"></div>
            
            </div>
            <div>
                <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a>
           </div>
            <ol class="carousel-indicators" >
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
            </ol>
        </div>
        <div class="ck">
             <h1>CHOKING</h1>
            <p>Choking occurs when a foreign object lodges in the throat or windpipe , blocking the flow of air.In adults,
                a piece of food often is the culprit. Young children often swallow small objects.Because choking cuts off oxygen to the brain, give first aid as quickly as possible.
            </p>
                
                <p>If the person is able to cough forcefully, the person should keep coughing. If the person is chooking and can't talk,
                    cry or laugh forcefully, the american red cross recommends a "five-and-five" approach to delivering first aid:
                </p>
                <p>Give 5 seconds back blows. Stand to the side and just behind a choking adult. For a child,kneel down behind.Place one arm across the person's chest for support.
                    Bend the person over at the waist so that the upper body is parallel with the ground.Deliver five separate back blows between the person's shoulder blades with the hell of your hand.
                </p>
                <p>
                    Give 5 abdominal thrusts. Perform five abdominal thrusts[also known as the Heimlich maneuver].
                </p>
                <p>Alternate between 5 blows and 5 thrust until the blockage is dislodged.The American Heart Association doesn't teach the back blow technique ,Only the abdominal 
                    thrust procedures. It's OK not to use back blows if you haven't learned the technique.Both approaches are acceptable.
                </p>
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