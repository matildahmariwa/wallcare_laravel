<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Portfolio</title>
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
    <script src="https://unpkg.com/isotope-layout@3.0.3/dist/isotope.pkgd.js"></script>
 
    <!--Css styling  -->
    <link href="css/main.css" rel="stylesheet"/>
        <script
          crossorigin="anonymous"
          src="https://kit.fontawesome.com/7f19f7dd61.js"></script>
    
          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
      </head>
      <body>
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
                        <a class="nav-link"  href="{{route('/home')}}">Home
                              <span class="sr-only">(current)</span>
                            </a>
                      </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                      </li> --}}
                      <li class="nav-item">
                        <a class="nav-link"  href="{{route('services')}}">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link"  href="{{route('portfolio')}}">Portfolio</a>
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
                    OUR PORTFOLIO
                  </h1> 
                 <span><a href="index.html">Home</a> | PORTFOLIO </span> 
                </div>
                </div>
              <!-- end of intro -->
              <div>
              <div>
                  <section id="portfolio" class="bg-light-gray">
                      <div class="gallary animate-grid">
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-12 text-center">
                                      <h2 class="section-heading">Portfolio</h2>
                                      <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                                  </div>
                              </div>
                                  <div class="row">
                                  <div class="col-xs-12">
                                      <div class="categories">
                                          <ul>
                                              <li>
                                                  <ol>
                                                      <li><a href="#" data-filter="*" class="active">All</a></li>
                                                      <li><a href="#" data-filter=".architecture">Architecture</a></li>
                                                      <li><a href="#" data-filter=".fashion">Fashion</a></li>
                                                      <li><a href="#" data-filter=".land">Landscape</a></li>
                                                      <li><a href="#" data-filter=".food">Food</a></li>
                                                  </ol>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
              </div>
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
                 <script>
                 jQuery(function() {
                  jQuery('#showall').click(function() {
                    jQuery('.targetDiv').show();
                  });
                  jQuery('.showSingle').click(function() {
                    jQuery('.targetDiv').hide();
                    jQuery('#div' + $(this).attr('target')).show();
                  });
                });  
              </script> 
               <script>
                $('.buttons a').click(function(){
                  $('a').removeClass('active');
                  $(this).addClass('active');
                });
                      
                </script> 
                <script>
    $(window).load(function() {
    var $container = $('.animate-grid .gallary-thumbs');
    $container.isotope({
        filter: '*',
        transitionDuration: '0.6s',
    });
    $('.animate-grid .categories a').click(function() {
        $('.animate-grid .categories .active').removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });
        return false;
    });
});
                </script>
  </body>
</html>