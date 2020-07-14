<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>portfolio design</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{    
    font-family: 'Roboto Condensed', sans-serif;
    
}

        body{
            overflow: hidden;
        }
        
        
    .works .filtering .filter {
  display: inline-block;
  padding: 2px 10px; }
        
        
.works .filtering span {
  background: #ebeaef;
  text-transform: uppercase;
  cursor: pointer;
  font-size: 13px;
  font-weight: 600;
  margin: 0 5px;
  padding: 15px 20px;
  transition: all 0.3s ease 0s;
}
        
        
  .works .filtering span:hover {
    background: #eb2f5b;
    color: #fff; 
        
}
        
        
        
.works .filtering .active {
  background: #eb2f5b;
  box-shadow: 0px 8px 30px -5px rgba(0, 0, 0, 0.2);
  color: #fff; }
        
        
        
        
.works .gallery {
  padding-left: 0;
  padding-right: 0;
  margin-bottom: -.05em; 
}
        
        
        
.works .larg-padding {
  padding: 0 15px; }
        
        
        
  .works .larg-padding .item-img {
    border: 10px solid #fff;
    margin-top: 30px; 
        
    }
        
        
        
.works .no-padding {
  padding: 0; 
        
        }
        
        
  .works .no-padding .item-img {
    margin-top: 0; }
        
        
        
.works .gutter {
  padding: 0 10px; }
        
        
  .works .gutter .item-img {
    margin-top: 20px; }
        
        
        
.works .item-img {
  margin-top: 30px;
  position: relative; }
        
        
  .works .item-img:hover .item-img-overlay {
    opacity: 1;
    transform: scale(1, 1); }
        
        
        
.works .item-img-overlay {
  background: rgba(0, 0, 0, 0.5);
  bottom: 0;
  left: 0;
  opacity: 0;
  padding: 30px;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  transform: scale(0, 0);
  transition: all .5s; }
        
        
        
  .works .item-img-overlay .icon {
    bottom: 30px;
    color: #eee;
    font-size: 30px;
    height: 30px;
    line-height: 30px;
    position: absolute;
    right: 30px;
    text-align: center;
    width: 30px; }
        
        
        
  .works .item-img-overlay p {
    color: #f2f2f2;
    font-weight: 400;
    margin-bottom: 0; }
        
        
        
  .works .item-img-overlay h3 {
    color: #fff;
    margin: 0;
    font-size: 25px;
    line-height: 1.3;
    font-weight: 500;
    line-height: 1.3;
    letter-spacing: 1px;
    display: inline-block;
    border-bottom: 3px solid #fff;
    padding-bottom: 5px;
    margin-bottom: 20px;
        
        
        }
        
       
    
    </style>
</head>
<body>
  
  
 
   <section class="works section-padding bg-gray" data-scroll-index="3">
            <div class="container-fluid">
               <br><br>
                <div class="row">
                   

                    <!-- filter links -->
                    <div class="filtering text-center mb-30 col-sm-12">
                        <div class="filter">
                            <span data-filter='*' class="active">All</span>
                            <span data-filter='.brand'>Brand</span>
                            <span data-filter='.design'>Design</span>
                            <span data-filter='.marketing'>Marketing</span>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <br><br><br>
                    <!-- gallery -->
                    <div class="gallery full-width">

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding brand">
                            <div class="item-img">
                                <img src="images/interior.jpg" alt="image" class="img-responsive">
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
                        <div class="col-lg-4 col-md-6 items no-padding design">
                            <div class="item-img">
                              <img src="images/interior.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Graphic Forms</h3>
                                        <a href="p2.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding marketing">
                            <div class="item-img">
                              <img src="images/render.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Creative Design</h3>
                                        <a href="p3.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding brand">
                            <div class="item-img">
                              <img src="images/roofing_serve.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Project Name</h3>
                                        <a href="p4.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding design">
                            <div class="item-img">
                              <img src="images/interior.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Seo Analytics</h3>
                                        <a href="p5.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-search-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items no-padding marketing">
                            <div class="item-img">
                              <img src="images/interior.jpg" alt="image" class="img-responsive">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
                                        <h3>Markting stream</h3>
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