<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About us</title>
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
                <a class="nav-link" href="{{route('/home')}}">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"href="{{route('services')}}">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="grid-x">
    <div class="cell large-12 medium-12 small-12 about_us_intro">
     <p>To be an acclaimed leader in provision of design & build services, interior and roofing solutions at affordable prices.</p>
    </div>
      </div>
      {{-- end of about_us_intro --}}
      <div class="container">
      <div class="grid-x about-company">
        
        <div class="cell large-6 medium-6 small-12">
       <span class="company-header">Wallcare Contractors</span>
       <p class="one">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
<div class="cell large-6 medium-6 small-12">
<p class="two">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
      </div>
      </div>
      {{-- end of about company --}}
     
      {{-- end of choose us --}}
      <div id="choose-container">
      <div class="container choose">
          <div class="choose_us">
              <div class="choose_us_header">
              <span>Why choose us</span>
              </div>
            </div>
      <div class="grid-x choose-info">
        <div class="cell large-4 small-4 medium-4">
            <i class="fas fa-handshake"></i> <br>
            <span class="choose-head">individual approach</span>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
        </div>
        <div class="cell large-4 small-4 medium-4">
            <i class="fas fa-handshake"></i> <br>
            <span class="choose-head">individual approach</span>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
        </div>
        <div class="cell large-4 small-4 medium-4">
            <i class="fas fa-handshake"></i> <br>
            <span class="choose-head">individual approach</span>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
        </div>

      </div>
      </div>
      </div>
      <div class="grid-x ">
        <div class="cell large-12 medium-12 small-12 get_quote">
    <div class="get_quote_info">
      <span>Ready To work with us?</span> 
      <a href="#">GET A QUOTE</a>
    </div>
    </div>
      </div>
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
</body>
</html>