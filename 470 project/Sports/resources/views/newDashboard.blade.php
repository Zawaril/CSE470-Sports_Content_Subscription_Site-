<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Sports Content Subscription Site-Homepage</title>

   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


   
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
<body>

 
  <div class="back-to-top"></div>

  <header>
  <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sports Content Subscription Site<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
          
              

              <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" style="background-color:black;" href="{{ route('login') }}" >Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" style="background-color:black;" href="{{ route('register') }}">Register</a>
            </li>

            </ul>
          </div>
        </div>
      </nav>
    
  </header>

  <!-- Banner Starts Here -->
  <div class="heading-page header-text" >
      <section heigh="100" width="100" class="page-heading" style="background-image: url(../assets1/img/background.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-lg-18">
              <div class="text-content">
              <span style="color:orange;" class="subhead"></span>
              <h1 class="display-4" style="color:orange;">Know the Latest Gossip</h1>
              
                
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->
   


    <div class="page-hero bg-image overlay-dark" style="">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <p>
          <br>
          <br>
        </p>  
        <a href="{{ route('register') }}" style="background-color:black;" class="btn btn-primary">Start Reading</a>
      </div>
    </div>
  </div>


  <footer style="background-color:black;" class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color:orange;">Company</h5>
          <ul class="footer-menu">
            <li><a href="{{url('about')}}">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color:orange;">More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Contributor</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color:orange;">Our partner</h5>
          <ul class="footer-menu">
            
            <li><a href="#">Brac University</a></li>
            
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color:orange;">Contact</h5>
          <p class="footer-link mt-2">66 Mohakhali, Dhaka-1212</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">ballers@temporary.net</a>

          
          </div>
        </div>
      </div>

      <hr>

      
    </div>
  </footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
  
</body>
</html>