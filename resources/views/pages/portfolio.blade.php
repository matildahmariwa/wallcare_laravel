<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portfolio design</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />

    {{-- foundation css --}}
    <script src="js2/js/vendor/jquery.js"></script>
    <script src="js2/js/vendor/what-input.js"></script>
    <script src="js2/js/vendor/foundation.js"></script>
    <script src="js2/js/app.js"></script>
    <link href="js2/css/foundation.css" rel="stylesheet" type="text/css" />
    <link href="js2/css/app.css" rel="stylesheet" type="text/css" />

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
   
    <!--Css styling  -->
<link href="css/main.css" rel="stylesheet"/>
<link href="css/portfolio.css" rel="stylesheet"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
crossorigin="anonymous"
src="https://kit.fontawesome.com/7f19f7dd61.js"></script>
</head>
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
    {{--end of top nav--}}
   {{-- <nav class="navbar  navbar-expand-lg navbar-light">
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
                            <a class="nav-link" href="index.html">Home
                                  <span class="sr-only">(current)</span>
                                </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="portfolio.html">Portfolio</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav> --}}
                  <div class="grid-x services-intro">
                      <div class="cell large-12 medium-12 small-12">
                      <h1>
                        OUR PORTFOLIO
                      </h1> 
                     <span><a href="index.html">Home</a> | PORTFOLIO </span> 
                    </div>
                    </div>
                  <!-- end of intro -->
 
   <section class="works section-padding bg-gray" data-scroll-index="3">
            <div class="container-fluid">
               <br><br>
                <div class="row">
                   

                    <!-- filter links -->
                    <div class="filtering text-center mb-30 col-sm-12">
                        <div class="filter">
                            <span data-filter='*' class="active">All</span>
                            <span data-filter='.interior'>Interior</span>
                            <span data-filter='.designi'>Design</span>
                            <span data-filter='.roofing'>Roofing</span>
                            <span data-filter='.renovation'>Renovation</span>
                            <span data-filter='.commercial'>Commercial</span>
                           
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <br><br><br>
                    <!-- gallery -->
                    <div class="gallery full-width">

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding interior">
                            <div class="item-img">
                                <img src="images/interior1.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    {{-- <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Web Design</h3>
                                        <a href="p1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding interior">
                            <div class="item-img">
                                <img src="images/interior2.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    {{-- <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Web Design</h3>
                                        <a href="p1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding interior">
                            <div class="item-img">
                                <img src="images/interior3.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    {{-- <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Web Design</h3>
                                        <a href="p1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding interior">
                            <div class="item-img">
                                <img src="images/interior4.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    {{-- <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Web Design</h3>
                                        <a href="p1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding interior">
                            <div class="item-img">
                                <img src="images/interior5.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    {{-- <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Web Design</h3>
                                        <a href="p1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding interior">
                            <div class="item-img">
                                <img src="images/interior6.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    {{-- <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Web Design</h3>
                                        <a href="p1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding designi">
                            <div class="item-img">
                              <img src="images/interior.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p></p>
                                        <h3></h3>
                                        <a href="p2.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding roofing">
                            <div class="item-img">
                              <img src="images/render.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    {{-- <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Creative Design</h3>
                                        <a href="p3.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding renovation">
                            <div class="item-img">
                              <img src="images/roofing_serve.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p></p>
                                        <h3></h3>
                                        <a href="p4.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding designi">
                            <div class="item-img">
                              <img src="images/interior.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p></p>
                                        <h3></h3>
                                        <a href="p5.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding commercial">
                            <div class="item-img">
                              <img src="images/commercial1.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p></p>
                                        <h3></h3>
                                        <a href="p5.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding commercial">
                            <div class="item-img">
                              <img src="images/commercial2.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p></p>
                                        <h3></h3>
                                        <a href="p5.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding commercial">
                            <div class="item-img">
                              <img src="images/commercial3.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p></p>
                                        <h3></h3>
                                        <a href="p5.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding roofing">
                            <div class="item-img">
                              <img src="images/interior.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p></p>
                                        <h3></h3>
                                        <a href="p6.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <div class="grid-x social">
            <div class="cell large-12 small-12">
             <ul>
                 <li><a href="https://www.facebook.com/wallcareltd/"><i class="fab fa-facebook-f "></i></a></li></li>
                 <li><a href="https://www.instagram.com/wallcare_contractors/"><i class="fab fa-instagram "></i></a></li>
                 <li><a href="https://twitter.com/WallcareC"><i class="fab fa-twitter"></i></a></li>
                 <li> <a href="https://www.linkedin.com/in/wallcare-contractors-988235184/?originalSubdomain=ke"><i class="fab fa-linkedin-in "> </a></i></li>
             </ul>
            </div>
           </div>
        <script src="isotope.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script>
    
    
   $(function () {
 
          
     $('.gallery').magnificPopup({
        delegate: '.popimg',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
      $('.gallery').isotope({
      // options
      itemSelector: '.items'
    });

    var $gallery = $('.gallery').isotope({
      // options
    });

    // filter items on button click
    $('.filtering').on( 'click', 'span', function() {

        var filterValue = $(this).attr('data-filter');

        $gallery.isotope({ filter: filterValue });

    });

    $('.filtering').on( 'click', 'span', function() {

        $(this).addClass('active').siblings().removeClass('active');

    });

       
}); 

    
       </script>
  
</body>
</html>