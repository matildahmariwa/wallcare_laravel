<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  
    <!-- Foundation -->
    <script src="js2/js/vendor/jquery.js"></script>
    <script src="js2/js/vendor/what-input.js"></script>
    <script src="js2/js/vendor/foundation.js"></script>
    <script src="js2/js/app.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <link href="js2/css/foundation.css" rel="stylesheet" type="text/css" />
    <link href="js2/css/app.css" rel="stylesheet" type="text/css" />
   

    <!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script
crossorigin="anonymous"
src="https://kit.fontawesome.com/7f19f7dd61.js"></script>   
<!--Css styling  -->
<link href="css/main.css" rel="stylesheet"/>
    <script
      crossorigin="anonymous"
      src="https://kit.fontawesome.com/7f19f7dd61.js"></script>

      <!-- javascript -->
      <script src="main.js"></script>
      <script src="https://unpkg.com/scrollreveal"></script>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
</head>
<style>
  
.text-center:after {
  content: " ";
  display: block;
  border: 2px solid #00afef;
  width: 93px;
  /* margin-top: 20px; */
  margin-right: auto;
  margin-bottom: -65px;
  margin-left: auto;
}
.text-center{
  font-size: 31px;
}
</style>
<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="rhxxAMkD"></script>
    <div class="grid-x top-nav">
        <div class="cell large-3 medium-3 small-12 comm-item">
            <i class="fas fa-envelope"></i> <span class="comm-info">wallcarecontractors@gmail.com</span> 
        </div>
        <!-- end of email -->
        <div class="cell large-3 medium-3 small-12 comm-item">
            <p> <i class="fas fa-phone-alt"></i>0728127290</p>
            </div>
            <!-- end of phone number -->
            
            <div class="cell large-3 medium-3 small-12 comm-item">
                <p><i class="fas fa-map-marker-alt"></i> 1st Floor, Juja city mall,Ruiru,Kenya</p>
                </div>
                <!-- end of location -->
                <div class="cell large-3 medium-3 small-12 comm-item">
                    <p><i class="fas fa-business-time"></i>Monday - Saturday 9:00 am - 5:00 pm</p>
                    </div>
                    <!-- end of work hours -->
            </div>
  </div>
  <div class="main">
  <nav class="navbar  navbar-expand-lg navbar-light">
      <div class="container sticky">
        <a class="navbar-brand" href="{{route('/home')}}"> 
              <img src="images/logo.png" alt="wallcare" class="logo">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link"  href="{{route('/home')}}">Home
                    <span class="sr-only">(current)</span>
                  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-section">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services-section">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio-container">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact-section">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>   
    <!-- end of nav -->
   <div class="grid-x intro">
      <div class="cell large-12 medium-12 small-12 one">
          <div class="card-block">
              <h3 class="beautiful">BEAUTIFUL FINISHES</h3>
              <p>Simplicity is at the heart of our design,we make</br> complex things look and feel simple </p>
             <div class="welcome-btn">
               <button type="button" onclick="window.location='{{ route("services") }}'" class="about-btn">Services</button>
              <button onclick="window.location='{{ route("portfolio") }}'" class="work-btn">Portfolio</button></div>
                
         </div>
        
      </div>
     
    </div>
      <!-- end of intro -->
      <div class="grid-x container about ">
        <div class="cell large-6 medium-6 small-12 info  animate-left" id="about-section"> 
       <span class="abt-title">ABOUT US</span> <br>
       <span class="headline">We deliver high quality design  and </br> building services</span>
       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
      </div>

       <div class="cell large-6 medium-6 small-12 about-pic animate-right"> 
          <img src="images/render.jpg" alt="house">
         </div>
      </div> 
      <!-- end of about us -->
      <div class="container" style="position: relative;padding-top: 45px;">
          <p class="text-center">Our services</p>
      <div class="grid-x services" id="services-section">
      
        <div class="cell large-4 medium-4 small-12 serve1 animate-bottom">
          <img src="images/design.jpg" alt="design">
          <p class="font-weight-bold"> Design and build</p>
          <span class="services-info">
            <p>
           We design and construct residential to commercial
            buildings. <br>
            
            </p>
            
          </span>
          </div>  <!-- end of serve 1 -->

          <div class="cell large-4 medium-4 small-12 serve2 animate-bottom-1100">
            <img src="images/interior.jpg" alt="interior">
            <p class="font-weight-bold">Interior finishes</p>
             <span class="services-info">
               <p>
              Our services range from Gypsum and T & G Ceilings,skimming and Painting works,tiling kitchen and wardrobe fitouts </br>
              
               </p>
             
            </span>
            </div>  <!-- end of serve 2 -->
            <div class="cell large-4 medium-4 small-12 serve3 animate-bottom-1500">
                <img src="images/roofing.jpg" alt="roofing">
                <p class="font-weight-bold">Roofing and Water proofing</p>
                <span class="services-info">
                    <p>
                   We supply and install stone coated tile(Decra),shingles,timber and light gauge structures,APP Waterproofing membranes. <br>
               
                  </p>
                   
                 </span>
              </div>  <!-- end of serve 3 -->
              <a href="{{route('services')}}" class="see">More services</a>
      </div> <!-- end of services -->                           
      </div><!-- end of services container -->
      <div class="grid-x quote">
       <div class="cell large-12 medium-12 small-12 animate-bottom">
     <p class="quote-info">
       -Lebo Grand <br>
      
        “Every design choice we make has a sensual effect on us.”
       </p>
      </div>
      </div>
      <div class="container" id="portfolio-container">
<div class="portfolio">
 <div class="portfolio-nav"> 
   <a class="portfolio-title">Latest Projects</a> |
   <a href="{{route('portfolio')}}" id="all-btn">View All projects</a>  
   {{-- <a id="all-btn" href="portfolio.html">View All projects</a> --}}
 </div>
    <div class="grid-x projects">
      
      <div class="cell large-3 medium-3 small-12 project1 item animate-bottom">
       
      <img  class="portfolio-image" src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/fcb56546090747.58478766a38af.jpg" alt="">
   
      <div class="bottom-left">Kijabe <br> Brew Coffee <br> Limuru</div>
      </div>
      <div class="cell large-3 medium-3 small-12 project2 item animate-bottom-1100">
    <img src="images/roofing.jpg" alt="">
    <div class="bottom-left">Afro <br> Sayari Hotel<br>Ruiru</div>`
        </div>
        <div class="cell large-3 medium-3 small-12 project3 item animate-bottom-1500">
           <img src="images/interior.jpg" alt="">
           <div class="bottom-left">Kiambu</div>
          </div>
          <div class="cell large-3 medium-3 small-12 project4 item animate-bottom-1800">
            <img src="images/school.jpg" alt="">
            <div class="bottom-left">Garden Brooke <br> school <br> Garden Estate</div>
            </div>
    
    </div>
</div>
      </div><!-- end of portfolio -->
  <!-- end of container projects -->

<div class="grid-x process">
 <div class="cell large-4 medium-4 small-12 wanna-info">
  <h2>Wanna <span class="want"> Work <br>with </span> us?</h2>
  <p>This is how it goes..when we get a potential client</p>
 </div>
 <div class="cell large-8 medium-8 small-12 steps">
    <div class="grid-x">
        <div class="cell large-6 medium-6 small-12 step1">
          <div class="step-info">
            <i class="fas fa-handshake"></i> <br>
            <p> We personally meet with the client for introduction and for site visit where the neccesary measurements are taken </p>
            </div> 
            <!-- end of step info -->
          </div>
          <div class="cell large-6 medium-6 small-12 step2">
              <div class="step-info">
              <i class="far fa-list-alt"></i> <br>
             <p>A meeting is set with the client so as to understand the requirements of the project </p>
              </div>  <!-- end of step info -->
            </div>
      </div>
      <div class="grid-x">
          <div class="cell large-6 medium-6 small-12 step3">
              <div class="step-info">
              <i class="fas fa-check-square"></i> <br>
               <p>A quotation is drafted of which when approved by the client a work schedule is agreed upon by both parties </p>
              </div> <!-- end of step info -->
            </div>
            <div class="cell large-6 medium-6 small-12 step4">
                <div class="step-info">
                <i class="fas fa-home"></i> <br>
             <p>This is where the actual design and implementation actually takes place.The construction takes place under supervision and finally the client reviews the work</p>
                </div> <!-- end of step info -->
              </div>
        </div>
 </div>
</div> <!-- end of process-->
<div class="contact_us" id="contact-section">
  <div class="contact-info">
  <h3>Get in touch</h3>
  <p>We would like to hear from you </p>
</div> 
<!-- end of contact-info -->
<div class="grid-x">
  <div class="cell large-12 small-12 medium-12 find_us">
      <div class="find-inoo">
          <span  class="material-icons">
              call
              </span> <br>
          <span >
         
          0728127290  <br>
          0708124984
        </div>
      
          
          
          <!-- end of call -->
          <div class="find-inoo">
          <span class="material-icons">
              email
              </span>
              <div class="find_ino">
                  wallcarecontractors@gmail.com
                </div>
          </div>
          <div class="find-inoo">
                <span class="material-icons">
                    location_on
                    </span>
                    <div class="find_ino">
                        P.O. BOX 2036-00232 <br>
                        1st Floor, Juja city mall,Ruiru,Kenya 
                    </div>
          </div>
  </div>
</div>
    
    </div>
 </div>

</div>  <!-- end of get in contact us -->
</div>
<div class="client-div">
    <h3>Our clients</h3>
<div class="grid-x clients animate-bottom ">
 <div class=" cell large-3 medium-3 small-12 client">
 <img src="images/brooke-logo.PNG" alt="brooke">
 </div>
 <!-- end of brooke -->
 <div class=" cell small-12 medium-3 large-3 client">
    <img src="images/hass-logo.PNG" alt="hass consult">
    </div>
    <!--end of hass consult -->
    <div class=" cell small-12 medium-3 large-3 client">
        <img src="images/kamel-logo.PNG" alt="kamelpark">
        </div>
        <!-- end of kamel -->
        <div class=" cell small-12 medium-3 large-3 client">
            <img src="images/lynk-logo.PNG" alt="lynk">
            </div>
</div>
</div>
<div class="grid-x footer ">
<div class="cell large-3 medium-3 small-12 footer_about footer_item animate-top " >
<h3>About us</h3>
<p>
    Wallcare Contracters provides extraordinary and unique solutions to your interior and exterior spaces. We aim to build strong relationships with our clients through our outstanding designs and ideas.
</p>
 
</div>
<!-- end of about us -->
<div class="cell large-3 medium-3 small-12 footer_item animate-top">
  <h3>Our services</h3>
  <ul>
      <li>Design & Build</li>
      <li> Renovation Works</li>
      <li> Gypsum Ceilings</li>
       <li> Painting </li>
     <li>Flooring</li>
     <li>Plumbing & Electrical services</li>
    <li>Roofing & APP Waterproofing</li>
  </ul>
  
</div>
<!-- end of our services -->
<div class="cell large-3 medium-3 small-12 footer_item animate-top">
   <h3>Quick links</h3>
   <ul class="quick-links">
     <li><a href="#">About Us</a></li>
     <li><a href="#">Our Services</a></li>
     <li><a href="#">Portfolio</a></li>
     <li> <a href="#">Contact Us</a></li>
   </ul>
  
</div>
<!-- end of quick links -->
<div class="cell large-3 medium-3 small-12 footer_item animate-top">
  <h3>Facebook</h3>
 <div id="fb-root"></div>
 <div class="fb-page" data-href="https://www.facebook.com/wallcareltd/" data-tabs="timeline" data-width="" data-height="350px" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/wallcareltd/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/wallcareltd/">WallCare Contractors Ltd</a></blockquote></div>
  </div>

</div> 
<!-- end of footer -->
<div class="grid-x social">
  <div class="cell large-12 small-12 ">
   <ul >
       <li class="animate-social"><a href="https://www.facebook.com/wallcareltd/"><i class="fab fa-facebook-f "></i></a></li></li>
       <li class="animate-social"><a href="https://www.instagram.com/wallcare_contractors/"><i class="fab fa-instagram "></i></a></li>
       <li class="animate-social"><a href="https://twitter.com/WallcareC"><i class="fab fa-twitter"></i></a></li>
       <li class="animate-social"> <a href="https://www.linkedin.com/in/wallcare-contractors-988235184/?originalSubdomain=ke"><i class="fab fa-linkedin-in "> </a></i></li>

   </ul>
  </div>
  <hr>
  
 </div>
 <div class="grid-x by">
<div class="cell large-6 small-12 medium-6">
<span class="copyright">Copyright  &#169; <?php echo date("Y"); ?>,Wallcare Contractors.All Rights Reserved</span>
</div>
<div class="cell large-6 small-12 medium-6"><span class="developer">Website development by <a href="https://www.linkedin.com/in/matildah-mariwa-42525314b/">Matildah Mariwa</a></span></div>

 </div>
 <a href="https://api.whatsapp.com/send?phone=254728127290&text=Hi%20Wallcare%20contractors" class="float" target="_blank"><i class="fab fa-whatsapp"></i> Text us on Whatsapp!</a>
 </div><!--end of body-->
  </div> <!-- end of main -->
  
        
        <script>
          window.sr=ScrollReveal();
sr.reveal('.animate-right',{
  origin:'right',
  duration:1000,
  distance:'25rem',
  delay:600

}

)
sr.reveal('.animate-left',{
  origin:'left',
  duration:1000,
  distance:'25rem',
  delay:600

  
}

)
sr.reveal('.animate-bottom',{
  origin:'bottom',
  duration:800,
  distance:'5rem',
  delay:200    
}

)
sr.reveal('.animate-bottom-1100',{
  origin:'bottom',
  duration:1100,
  distance:'5rem',
  delay:200   
}

)
sr.reveal('.animate-bottom-1500',{
  origin:'bottom',
  duration:1500,
  distance:'5rem',
  delay:200   
}

)
sr.reveal('.animate-bottom-1800',{
  origin:'bottom',
  duration:1800,
  distance:'5rem',
  delay:200   
}

)

sr.reveal('.animate-social',{
  origin:'bottom',
  duration:1000,
  distance:'5rem',
  delay:400    
}

)
sr.reveal('.animate-top',{
  origin:'top',
  duration:1000,
  distance:'5rem',
  delay:400    
}

)
           </script> 
           <script>
             $(document).ready(function(){
  var deviceAgent = navigator.userAgent.toLowerCase();
  var agentID = deviceAgent.match(/(iPad|iPhone|iPod)/i);
  if (agentID) {       
     $('body').css('-webkit-overflow-scrolling', 'touch');
  }
});
           </script>   
  <script>
    $(document).ready(function() {
      $(document).foundation();
    });
  </script>
</body>
</html>