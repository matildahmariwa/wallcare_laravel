<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
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
   <script src="https://unpkg.com/scrollreveal"></script>
       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  
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
        <!-- end of top nav -->
            <nav class="navbar  navbar-expand-lg navbar-light">
                    <div class="container sticky" >
                        <a class="navbar-brand" href="{{route('/home')}}">
                            <img src="images/logo.png" alt="wallcare" class="logo">
                          </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                      <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto" >
                          <li class="nav-item active" >
                            <a class="nav-link" href="{{route('/home')}}">Home
                                  <span class="sr-only">(current)</span>
                                </a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="{{route('about')}}">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"href="{{route('services')}}">Services</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('projects')}}">Portfolio</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            <div class="grid-x services-intro">
              <div class="cell large-12 medium-12 small-12">
              <h1>
                OUR SERVICES
              </h1> 
             <span><a href="{{route('/home')}}">Home</a> | Services </span> 
            </div>
            </div>
                <div class="container" id="design">
                  <span class="service-head">Design & Build </span>
                <div class="grid-x build">
                  <div class="cell large-6 medium-6 small-12 about-pic animate-left"> 
                  <div class="card">
                      <img src="images/design2.jpg" alt="house">
                      <div class="card-section" >
                          <div class="process-icon" style="float: left;">
                              <i class="fas fa-pencil-ruler"></i> <br>
                            Design Phase
                          </div>
                          <div class="process-icon" style="float: left;">
                          <i class="fas fa-arrow-circle-right"></i>
                        </div>
                          <div style="float: left;" class="process-icon"> <i class="fas fa-hard-hat"></i> <br>
                            
                            Quantity Survey
                          </div>
                          <div class="process-icon" style="float: left;">
                            <i class="fas fa-arrow-circle-right"></i>
                          </div>
                          <div style="float: left;" class="process-icon">
                            <i class="fas fa-hammer"></i> <br>
                            Construction
                          </div>
                          
                          <br style="clear: left;"/>
                      </div>
                    </div>
                   </div>
                  <!-- end of build photo -->
                  <div>
                    <div class="cell large-6 medium-6 small-12 design_process animate-right">
                    <h3>Our work process makes <br>  your dream true</h3>
                    <div class="gg">
                    <div class="process_info">
                        <h5><span class="number">1</span> Architectural & structural designs</h5> <br>
                        <p class="process_info">Our team of architects come up with high quality architecture designs that are <br> market standard to suit your needs.With the design <br> one gets a master layout,3D renders and a video walkthrough.</p>
                    </div>
                    <div class="process_info">
                        <h5><span class="number">2</span> Quantity Survey</h5> <br>
                        <p class="process_info">A survey of the site is done.The construction managers come up <br> with the bill of quantities  which shows the estimate amount that will be used <br> during the construction</p>
                    </div>
                    <div class="process_info">
                        <h5><span class="number">3</span> Construction Phase</h5> <br>
                        <p class="process_info">Our construction is led by highly qualified construction managers who <br> deliver market standard buildings .We come up with a work program that will be <br> followed during the construction so as to deliver high quality work in the <br> intended time</p>
                    </div>
                    </div>
                    </div>
                  </div>
                </div>
                </div>
                <!-- end of design -->
                <div class="container">
                <div class="grid-x service-finishes">
                 <div  class="cell large-12 medium-12 small-12 services-finishes-start">
                    <span class="service-head">Interior Finishes</span>
                    <p class="animate-left"> With a thorough understanding of the clients needs  we transform your interior <br> space  idea into reality.Our team of talented interior designers  is always updated  <br> with the current interior  design trends through our continous research.  A good <br> interior design has an impact on productivity  and comfortability of a person.</p>
                 </div>
                 {{-- <img src="images/sketch.jpg" alt=""> --}}
                </div>
                <div class="grid-x finishes-list "  >
                  <div  class="cell large-4 medium-4 small-4 animate-bottom">
                    <ul class="animate-bottom">
                      <li> <i class="fas fa-plus"></i>Gypsum Ceiling</li>
                      <li> <i class="fas fa-plus"></i>T & G Ceiling</li>
                      <li><i class="fas fa-plus"></i>Skimming</li>
                      <li><i class="fas fa-plus"></i>Painting</li>
                      <li><i class="fas fa-plus"></i>Tiling and Wooden flooring</li>
                      <li><i class="fas fa-plus"></i>Kitchen & Wadrobe fittings</li>
                    
                    </ul>
                  </div>
                </div>
              </div>
                <!-- end of finishes -->
                <div class="container">
                <div class="grid-x roofing-serve">
                <div class="cell large-6 medium-6 small-12 WaterProofing">
                  <img src="images/roofing_serve.jpg" alt="">
                  <span class="proofing-sub">Roofing & APP WaterProofing</span> 
                </div>
                <div class="cell large-6 medium-6 small-12 roof-serve_info">
                 <p>
                 <span>W</span>e  provide the best roofing solutions for property owners in Kenya, from installation of an entire new roof or repair works such as leaking roof or blocked gutters.  <br> Wallcare contractors work hard to provide the best services in the market. Our attention to key details of every roof needs guarantees you of a beautiful leak free roof. <br> Our roofing charges are also pocket friendly which usually vary based on the material chosen and the total square footage
                 </p>
                 <p style="margin-top:31px">
                  <span >W</span>aterproofing a building is important because it ensures moisture and humidity do not penetrate to the deep interiors of the building which can cause cracks,paint peel offs,molds,mildew which can lead to health hazards of inhabitants. <br> To provide the best waterproofing solution we use APP waterproofing<br> APP membrane is an efficient and durable waterproofing material used on flat concrete roofs,concrete gutters,basements and retaining walls.
                  </p>
                 
                 </div> 
                
                </div>
              </div>
                <!-- end of roofing -->
                <div class="container">
                <div class="grid-x roofing-products">
                    <div class="cell large-12 medium-12 small-12">
                      <span class="product-title">Our Roofing products</span>
                      <p class="product-title-info">There are currently many roofing products available in the market.Some of the considerations to take into when choosing a roofing product include the budget you have,how long you want the roof to last,and the products you prefer either natural or eco-friendly </p>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <!-- <h3 class="roof-cover">Types of roof covers</h3> -->
                <div class="grid-x types">
                 <div class="cell large-6 medium-6 small-12 roofing-type">
                   <img src="images/roofing.jpg" style="height:332px" alt="">
                   <div class="word-block">
                      <p>Asphalt shingles</p>
                   </div>
                 </div>
                 <!-- end of asphalt -->
                 <div class="cell large-6 medium-6 small-12 roofing-type">
                    <img src="https://hubcitymetal.com/uploads/3/5/3/6/35362418/1775831_orig.jpg" style="height:332px" alt="">
                    <div class="word-block">
                       <p>Stone Coated/Decra</p>
                    </div>
                  </div>
                  <!-- end of concrete tiles -->
    
                </div>
                
                <div class="grid-x types">
                    <div class="cell large-6 medium-6 small-12 roofing-type">
                  <img src="https://www.southern-timber.co.uk/wp-content/uploads/2017/05/box_profile_barn.jpg" alt="">
                  <div class="word-block">
                      <p>Roofing sheets</p>
                   </div>
                   </div>
                    <!-- End of slate roofing -->
                    <div class=" cell large-6 medium-6 small-12 roofing-type">
                        <img src="images/flat_roof.jpg" alt="" style="height:332px;">
                     
                        <div class="word-block">
                            <p>APP WaterProofing</p>
                         </div>
                         
                    </div>
                </div>
               
              </div>
                <!-- end of grid-x -->
                <div class="grid-x ">
                  <div class="cell large-12 medium-12 small-12 get_quote">
              <div class="get_quote_info">
                <span>Ready To work with us?</span> 
                <a href="#">GET A QUOTE</a>
              </div>
              </div>
                </div>
                <!-- end of get a quote -->
                    <div class="grid-x social ">
                      <div class="cell large-12 small-12">
                          <ul >
                            
                              <li class="animate-social"><a href="https://www.facebook.com/wallcareltd/"><i class="fab fa-facebook-f "></i></a></li></li>
                              <li class="animate-social"><a href="https://www.instagram.com/wallcare_contractors/"><i class="fab fa-instagram "></i></a></li>
                              <li class="animate-social"><a href="https://twitter.com/WallcareC"><i class="fab fa-twitter"></i></a></li>
                              <li class="animate-social"> <a href="https://www.linkedin.com/in/wallcare-contractors-988235184/?originalSubdomain=ke"><i class="fab fa-linkedin-in "> </a></i></li>
                     
                          </ul>
                      </div>
                     </div>
                     <hr>
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
                duration:500,
                distance:'25rem',
                delay:600  
            }  
            )
            sr.reveal('.animate-social',{
        origin:'bottom',
        duration:1000,
        distance:'5rem',
        delay:400    
    }
    
    )
                         </script>   
                     <script>
                      // Initialize and add the map
                      function initMap() {
                        // The location of Uluru
                        var wallcare = {lat: 1.1179, lng: 37.0090};
                        // The map, centered at Uluru
                        var map = new google.maps.Map(
                            document.getElementById('map'), {zoom: 4, center: wallcare});
                        // The marker, positioned at Uluru
                        var marker = new google.maps.Marker({position: wallcare, map: map});
                      }
                          </script>
                         
                          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFDwP1v9neh0k3aiiZ1yvoAFMIk7Id12c&callback=initMap"
                          async defer>
                          </script>    
      </body>
</body>
</html>