<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> www.cargoexpressdeliveries.com </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  
  <link href="css/landing-page.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
   <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="https://cargoexpressdeliveries.com">
                    Cargo Express Deliveries
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                          <li class="nav-item">
                               
                                <a class="nav-link" href="{{route('package.track')}}"> Track Package </a>
                          </li>
                  
                            <li class="nav-item">
                               
                                <a class="nav-link" href="#about"> About Us  </a>
                            </li>

                            <li class="nav-item">
                              

                                <a class="nav-link" href="#contact"> Contact Us </a>
                            </li>


                           <li class="nav-item">
                               
                                <a class="nav-link" href="#transpotation"> Services  </a>
                            </li>

                            <li class="nav-item">
                               

                                <a class="nav-link" href="#transpotation"> Transportation  </a>
                            </li>

                            <li class="nav-item">
                               

                                <a class="nav-link" href="#warehouse"> Warehouse </a>
                            </li>

                            <li class="nav-item">
                              

                                <a class="nav-link" href="#testimonial"> Testimonial </a>
                            </li>
                       
                    </ul>
                </div>
            </div>
        </nav>

  <!-- Masthead -->
  <header>


  <div class="container">
      <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto mt-5 mb-5">
          <form action="{{route('track')}}" method="POST" class="pb-5 pt-5" >
            @csrf
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="text" name="track_code" class="form-control form-control-lg" placeholder="Please Enter Your Tracking Number" required />
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Track</button>
              </div>
            </div>
          </form>
        </div>
      </div>

  </div>



  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Full Technical Support</h3>
            <p class="lead mb-0">We Are Alway available to assist our customers at all times.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3> We Are Reliable</h3>
            <p class="lead mb-0">You can relly on us as we offer the best serve</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Safe</h3>
            <p class="lead mb-0">Your goods are alway safe with us</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase" id="about">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/image2.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <!-- <h2>Fully Responsive Design</h2> -->
          <p class="lead mb-0">Over a period of time,
            Cargo Express Delivery service 
            has expanded our services exponentially by how we deliver goods
            and other services saffly and ontime for our custommers,
            cargo express delivery also offer the following services,<em> Transportation Services, Warehouse, Courier Services, Request a Quote also mornitoring of shipments </em></p>
        </div>
      </div>
      <div class="row no-gutters" id="transpotation">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/image3.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Transportation</h2>
          <p class="lead mb-0">
            Cargo express delivery offer transpotation services such as
            <ul>
              <li>Distribution</li>
              <li>Crane service</li>
              <li>Refrigerated service</li>
              <li>TruckloadTruckload</li>
              <li>Cross-border</li>
              <li>Hot Shot service 24/7</li>
              <li>LTL shipping</li>
              <li>Flat deck service</li>
              
            </ul>
          </p>
        </div>
      </div>
      <div class="row no-gutters" id="warehouse">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/image4.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <!-- <h2>Easy to Use &amp; Customize</h2> -->
          <p class="lead mb-0">If you need a safe and secure place to stor your good and valuables but dont own a place to keep them,
            we offer affordable solution.
            Next to our transportation service, 
            we provide storage solutions to
            businesses and private individuals in the community. 
            the rates vary depending on storage size of what is to be stord.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light" id="">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0" id="testimonial">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4" id="">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"What an amazing experience "</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these  resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">CARGO EXPRESS</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        
          <p class="lead">
            
              Over a period of time, Cargo Express Delivery service has expanded our services exponentially by how we deliver goods and other services saffly and ontime for our custommers,  cargo express delivery also offer the following services, Transportation Services, Warehouse, Courier Services, Request a Quote also mornitoring of shipments.

          </p>

        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <!-- <li class="list-inline-item">
              <a href="#">About</a>
            </li> -->
            
            <li class="list-inline-item">
             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-inbound" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.47 16.47 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.471 17.471 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
                </svg>
                  +447452273475
                
              
            </li>
            <br>
            <li class="list-inline-item">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                </svg>
                 cargoexpressdelivery_co.uk@yahoo.com
            </li>
            <!-- <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li> -->
          </ul>
          <p class="text-muted small mb-4 mb-lg-0"  id="contact">&copy; www.cargoexpressdeliveries.com  All Rights Reserved.</p>
        </div>
        <!-- <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div> -->
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
