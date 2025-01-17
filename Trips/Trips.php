<?php

session_start();

?>


<!DOCTYPE html>
    <meta charset="UTF-8" />
    <title>Trips</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--css font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
     <!--bootstrap-->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
     integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
     integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="css/Trips.css" />
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/all.min.css">
     <link rel="shortcut icon" href="images/Capture-removebg-preview (1).png" />
<head>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-left">
                <img src="images/Capture.PNG3-removebg-preview.png" alt="Capture">
            </div>
            <!-- ./nav-center-->
            <div>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" onclick="document.location.href='../travelo.php'">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" onclick="document.location.href='Trips.php'">Trips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " onclick="document.location.href='../Day Use/Day Use.php'">Day use</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Buses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " onclick="document.location.href='../contact us/contactus.html'">Contact Us</a>
                    </li>
                    <?php if (isset($_SESSION['email'])){  ?>
                    <div class="my_account">
                      <li class="nav-item">
                          <a class="nav-link "><i class="far fa-user mr-3"></i><?php print_r($_SESSION['name']);?></a>
                      </li>
                  </div>
                  <?php }?>
                </ul>
            </div>
        </nav>
        <div class="model" active="open">
            <div class="container h-100">
                <div class="d-flex justify-content-between h-100">
                    <div class="reservations_header col-6">
                        <div>
                        <h1> All Reservations </h1>
                        <div>Hi, <?php print_r($_SESSION['name']." ". $_SESSION['lastname']) ?></div>
                        <div>Email: <?php print_r($_SESSION['email'])?></div>
                        <div>Mobile: <?php print_r($_SESSION['mobNum'])?></div>

                        </div>
                    </div>
                    <div class="list_reservations col-5 d-flex align-items-center">
                        <nav class="h-75">
                            <ul class="h-100 d-flex flex-column justify-content-between">
                                <li><i class="fas fa-dot-circle"></i> Hergada Tropitel Sahl Hasheesh</li>
                                <li><i class="fas fa-dot-circle"></i> Luxor Steigenberger Nile Palace Hotel</li>
                                <li><i class="fas fa-dot-circle"></i> Dahab Sheikh Ali Resort.</li>
                                <li><i class="fas fa-dot-circle"></i> Sharm El Shekh Grand Rotana Resort</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <!-- First slide -->
          <div class="carousel-item active">
            <!--Mask color-->
            <div class="view">
              <!--Video source-->
              <video class="video-fluid" autoplay loop muted>
                <source src="images/1.mp4" type="video/mp4" />
              </video>
              <div class="mask rgba-black-strong"></div>
            </div>
        </div>
        </div>
    </div>
      <!--Carousel Wrapper-->

      <div class="awesome-ha">
        <h3 class="agency-ha">we are <span class="simple-ha">awesome</span> <!-- ./simple-ha-->agency.</h3> <!-- ./agency-ha-->
        <p class="lorem-ha">Lorem Ipsum is simply dummy text of the printing and type setting industry.
           Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
           when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> <!-- ./lorem-ha-->
    </div> <!-- ./awesome-->
      <div class="mission-ha">
        <div class="cover-ha">
            <div class="shine-ha">
                <div class="ipsum-ha"><span class="line-ha"></span> <!-- ./line-ha--></div> <!-- ./ipsum-ha-->
                <p class="digital-ha">Our <span class="printer-ha">Site</span> <!-- ./printer-ha--></p> <!-- ./digital-->
            </div> <!-- ./shine-ha-->
            <p class="comfort-ha">The idea of ​​the project on internal tourism for example, if I need to reserve a journey and do not know the place or any tourist programs, this website facilities the search for the website journey for my needs, timing and program. This website has a range of companies that provide tours with all places with suitable hotels. Each company have database for all users to get his journey with easy way to anywhere.</p> <!-- ./comfort-ha-->
        </div> <!-- ./cover-ha-->
        <div class="other-ha">
        <img src="images/collections-3-3.jpg" alt="">
        </div> <!-- ./other-ha-->
    </div> <!-- ./mission-ha-->

    <div class="embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BapSQFJPMM0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>"></iframe>
      </div>


    <div id="booking" class="section">
        <div class="section-center">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-md-push-5">
                <div class="booking-cta">
                  <h1>Make your reservation</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
                    ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
                    Perspiciatis.
                  </p>
                </div>
              </div>
              <div class="col-md-4 col-md-pull-7">
                <div class="booking-form">
                  <form>
                    <div class="form-group">
                      <span class="form-label">Your Destination</span>
                      <input class="form-control" type="text" placeholder="Enter a destination or hotel name">
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <span class="form-label">Check In</span>
                          <input class="form-control" type="date" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <span class="form-label">Check out</span>
                          <input class="form-control" type="date" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <span class="form-label">Rooms</span>
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select>
                          <span class="select-arrow"></span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <span class="form-label">Adults</span>
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select>
                          <span class="select-arrow"></span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <span class="form-label">Children</span>
                          <select class="form-control">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                          </select>
                          <span class="select-arrow"></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-btn">
                      <button class="submit-btn">Check availability</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <footer class="log-footer">
        <div class="container">
          <div class="footer_logo">
            <img src="images/footer-removebg-preview.png" alt="">
          </div>
  
          <div class="footer_container">
            <div class="row">
                <div class="left-footer col-4">
                  <div class="footer-icon1">
                    <div><i class="fas fa-phone-alt "></i>01142929022</div>
                    <div><i class="fas fa-envelope"></i>hello@travelo.com</div>
                  </div>
                  <div class="footer-icon2">
                    <span class="face"><i class="fab fa-instagram"></i></span> <!-- ./face-->
                    <span class="face"><i class="fab fa-facebook-f"></i></span> <!-- ./face-->
                  </div>
                 
                </div> <!-- ./left-footer-->
                <div class="footer-content-sh col-4">
                  <h4 class="footer-title-sh">About Unifox</h4>
                  <div class="line-footer-sh"> </div>
                  <div class="footer-container-sh">
                    <p class="footer-text-sh"> The idea of ​​the project on internal tourism for example,
                       if I need to reserve a journey and do not know the place or any tourist programs.</p>
                  </div>
      
                </div>
                <div class="footer-right col-4">
                  <h4 class="footer-title-sh">Galary</h4>
                  <div class="line-footer-sh"> </div>
                  <div class="footer-container-sh">
                    <img src="images/1 (1).jpg" alt="">
                    <img src="images/1 (2).jpg" alt="">
                    <img src="images/1.jpg" alt="">
                    <img src="images/2.jpg" alt="">
                    <img src="images/3 (3).jpg" alt="">
                  </div>
      
                </div>
            </div>
           
          </div>
          <div class="footer-footer-content">
            <div class="row">
              <div class="col-6">
                <div class="footer-container-1">
                  <p> Travelo © 2020 All Right Resived made with <i class="fa fa-heart" aria-hidden="true"></i> By <span class="special-sh"> Monisterthemes </span>  </p>
                </div>
              </div>
              <div class="col-6">
                <ul class="footer-list">
                  <li> Home </li>
                  <li> Trips </li>
                  <li> Day Use </li>
                  <li> Hotels </li>
                  <li> Buses </li>
                  <li> Contact Us </li>
                </ul>
              </div>
            </div>  
          </div>
  
        </div>
  
        
        
      </footer> <!--./log-footer-->
      <div id="to-top" title="back to top"><i class="fas fa-chevron-up"></i></div>
      <script src="js/jsquery.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>