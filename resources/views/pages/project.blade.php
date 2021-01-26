<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
    
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
      
        <!-- Foundation -->
        <script src="../js2/js/vendor/jquery.js"></script>
        <script src="../js2/js/vendor/what-input.js"></script>
        <script src="../js2/js/vendor/foundation.js"></script>
        <script src="../js2/js/app.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    
        <link href="../js2/css/foundation.css" rel="stylesheet" type="text/css" />
        <link href="../js2/css/app.css" rel="stylesheet" type="text/css" />
       
    
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
    <link href="../css/main.css" rel="stylesheet"/>
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

<body>
  
        <nav class="navbar  navbar-expand-lg navbar-light">
                <div class="container sticky">
                  <a class="navbar-brand" href="{{route('/home')}}"> 
                        <img src="../images/logo.png" alt="wallcare" class="logo">
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
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('services')}}">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('projects')}}">Portfolio</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('blog')}}">Blog</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>   
              {{-- end of nav --}}
              <div class="grid-x project-head">
               <h1>
                {{$p->project_name}} ~ {{ $p->project_county }} ,Kenya
              </h1>
              </div>
              {{-- end of project header --}}
              <div class="results-head">
              <span>Work done on project</span> 
            </div>
              <div class="grid-x project-gallery container">
                 
                @foreach($photos as $photo)
               
                @if($p->id == $photo->project_id)
                <div class="cell large-6 medium-6 small-12">
                 <img src="{{ asset('./images/'.$photo->photo_path) }}" style="object-fit: contain;"/>
                </div>
            @endif
            @endforeach
              </div>
              {{-- cover image --}}
           
              <div class="grid-x container ">
                <h2 class="info-details-head">About Project</h2>
              </div>
              <div class="grid-x info-details container">
               
              <p>{{$p->description}}</p>
                 </div>
                 {{-- end of details --}}
                 <div class="grid-x gallery">

                   
                    @if($previous)
                 <div class="cell large-6 medium-6 small-12 items2">
                    <a href="{{route('project',$previous->id)}}">
                        
                      <img src="{{ asset('./images/'.$previous->cover_image) }}" alt="" class="portfolio-image">
                        <div class="cell-info">
                                 <span class="previous-head"><i class="fas fa-long-arrow-alt-left"></i> Previous project</span>
                                <p>{{$previous->project_name}}</p>
                               
                        </div>
                    </a>
                    
                  
                    
                 </div>
                 @endif
                 
                 @if($next)
                 <div class="cell large-6 medium-6 small-12 items2">
                    <a href="{{route('project',$next->id)}}">
                    <img src="{{ asset('./images/'.$next->cover_image) }}" alt="" >
                    <div class="cell-info">
                        <span class="next-head">Next project <i class="fas fa-long-arrow-alt-right"></i></span>  
                        <p>{{$next->project_name}}</p>
                       
                </div>
                    </a>
                 </div>
                @endif
                
                </div>
               
                {{-- end of gallery --}}
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
                $(document).ready(function() {
                  $(document).foundation();
                });
                
              </script>
                                      
</body>
</html>