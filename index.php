<?php include('./php/mail.php') ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cheeta</title>
    <link rel="stylesheet" href="./css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,,600,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./js/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./js/vendor/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./js/vendor/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="./css/mediaQ.css">
    <link rel="shortcut icon" href="./images/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/owl-custom.css">

    <!--───────────────────────────────────────────────────────────────── -->
    <!--───────────────────────────────────────────────────────────────── -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--───────────────────────────────────────────────────────────────── -->


</head>

<body>

    <!-- HEADER SECTION-->

    <header>
        <nav role="navigation">
            <div id="menuToggle">
                <!--
                      A fake / hidden checkbox is used as click reciever,
                      so you can use the :checked selector on it.
                      -->
                <input type="checkbox" />

                <!--
                      Some spans to act as a hamburger.
                      
                      They are acting like a real hamburger,
                      not that McDonalds stuff.
                      -->
                <span></span>
                <span></span>
                <span></span>

                <!--
                      Too bad the menu has to be inside of the button
                      but hey, it's pure CSS magic.
                      -->
                <ul id="menu">
                    <a href="#">
                        <li>Home</li>
                    </a>
                    <a href="#about">
                        <li>About</li>
                    </a>
                    <a href="#services">
                        <li>Services</li>
                    </a>
                    <a href="#cars">
                        <li>Cars</li>
                    </a>
                    <a href="#contact">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
        </nav>

            <select  class='language' name="forma" onchange="location = this.value;">
                    <option value="index.html">EN</option>
                    <option value="index_ar.html">AR</option>
        
                </select>
    </header>

    <body>
            <div id="home" class=" post__container">

                <div class="post__content">
                    <div>
                        <h1 class="post__header"><img class="img-responsive" src="./images/img/cheetaWrite.png" alt=""></h1>
                        <h5 class="post__header"> <span>For </span> <span> Car</span> <span>Rental</span> <span>&</span> <span>Transport</span> <span>Services</span></h5>
                    </div>

                    <p class="post__text">
                        <p><strong><span class="element"></span></strong> </p>
                    </p>
                </div>
                <div class="post__link">
                    <a href="#" onclick="openBox()">Get A Car</a>
                </div>
            </div>



            <!-- End HEADER SECTION-->

            <main>
                <!-- start about ───────────────────────────────────────────────────────────────── -->


                <section id="about">
                    <div class="container-fluid">
                        <div class="row about ">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h1 style="  color:rgb(255, 112, 66)">ABOUT US</h1>
                                </div>
                            </div>
                            <!-- here text goes -->
                            <div class="col-md-6 abt" data-aos="fade-right" data-aos-duration="2000">
                                <div class="singleAbout">
                                    <h3>Leaders in The World of Car Rental & Transportation Services</h3>
                                    <p>Chita Car Rental Company, a Transportation and Logistics Company was officially established at the Ministry of Trade and Industry, and according to the established system of companies, it was able to form a huge fleet
                                        of all types and categories of cars to try to meet all customers demands.</p>
                                </div>
                            </div>
                            <!-- here image goes -->
                            <div class="col-md-6 " data-aos="fade-left" data-aos-duration="2000">
                                <div class="singleAbout">
                                    <img src="./images/img/logo.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- end about ───────────────────────────────────────────────────────────────── -->

                <!-- start service ───────────────────────────────────────────────────────────────── -->
                <section id="services" class="clearfix">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading headingServices">
                                    <h1 style="  color:rgb(255, 112, 66)">SERVICES</h1>
                                </div>                            </div>
                            <div class="col-md-4 text-center">
                                <div class="singleService">
                                    <img src="./images/icons/car-insurance (1).png"  alt="">
                                    <h3>Different Types Of Cars and Insurance</h3>
                                    <p>The company is proud to have a distinguished fleet of cars with the latest models. Furthermore, one of the most important advantages offered by the company is to provide alternative cars in case of breakdowns and accidents.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="singleService">
                                        <img src="./images/icons/car.png"  alt="">
                                    
                                    <h3>Logistics and Transport Services</h3>
                                    <p>The company provides a huge fleet of trucks and trailers that are operated regularly to serve the interest of customers and to transport goods, furniture, tools, light and heavey equipments and food baskets to affected areas.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="singleService">
                                    <img src="./images/icons/driver.png"  alt="">
                                    <h3>Professional Drivers and Maintenance</h3>
                                    <p>The company has a highly trained, skilled drivers to ensure customer satisfaction and to apply the highest standards of security and safety. Moreover, the company has contracted with specialized agencies to maintain all the company's cars.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end services ─────────────────────────────────────────────────────────── -->


<!--owl cars start-->
<div class="my-spacer my-spacer-xs"></div>
<section id='cars'>
<div class="container mt-5">
        <div class="row">
                <div class="col-md-12">
                        <div class="heading car">
                            <h1>OUR CARS</h1>
                        </div>
                    </div>
            <div class="owl-carousel owl-theme">
              
                <!--cars-->
                <!--start car1-->
                <div class="item">  <div  data-aos="fade-right"  data-aos-easing="ease-out-cubic"
                    data-aos-duration="2500">
                        <div class="col-md-12 flip-card-container">
                                <div class="flip-card">
                                  <div class="flip-card-front">
                                    <img
                                      class="img-responsive"
                                      src="./images/cars-images/toyota-hilux-pickup-truck-car-2-18-toyota-tacoma-dalton-toyota-hilux.png"
                                      alt="car image"
                                    />
                                    <div class="carText">
                                        <h1>Hilux</h1>
                                    </div>
                                  </div>
                                  <div class="flip-card-back">
                                    <div class="carText text-left">
                                      <h4>Toyota Hilux</h4>
                                      <!-- here text goes -->
                                      <ul>
                                        <li>
                                            <span><small>Transmission:</small></span>
                                            <span class="spec"> Variable</span>
                                          </li>
                                          <li>
                                            <span><small>Exterior:</small></span>
                                            <span class="spec">Super White</span>
                                          </li>
                                        <li><span><small>Suspension:</small></span> <span class="spec">Double Wishbone</span></li>
                                     
                                    
                                      </ul>
                                      <ul>
                                          <li>
                                              <span class="price">Net Price</span>
                                              <span class="price">-</span>
                                          </li>
                                      </ul>
                  
                                      <div class="rent">
                                            <a href="#cars"  onclick="openBox()" class="btn btn-primary">Rent Now</a
                                        >
                                      </div>
                                      <!-- end text -->
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>  </div>
                     <!--end car1-->

                <!--start car2-->
                <div class="item">  <div  data-aos="fade-right"  data-aos-easing="ease-out-cubic"
                    data-aos-duration="2500">
                        <div class="col-md-12 flip-card-container">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                    <img
                                        class="img-responsive"
                                        src="./images/cars-images/Rav4_2020_red.png"
                                        alt="car image"
                                    />
                                    <div class="carText">
                                        <h1>RAV4</h1>
                                    </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <div class="carText text-left">
                                            <h4>Toyota RAV4</h4>
                                            <!-- here text goes -->
                                            <ul>
                                              <li>
                                                  <span><small>Transmission:</small></span>
                                                  <span class="spec"> Variable</span>
                                                </li>
                                                <li>
                                                  <span><small>Exterior:</small></span>
                                                  <span class="spec">Crimson</span>
                                                </li>
                                              <li><span><small>Suspension:</small></span> <span class="spec">Double Wishbone</span></li>
                                           
                                          
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span class="price">Net Price</span>
                                                    <span class="price">-</span>
                                                </li>
                                            </ul>
                        
                                            <div class="rent">
                                                  <a href="#cars"  onclick="openBox()" class="btn btn-primary">Rent Now</a
                                              >
                                            </div>
                                            <!-- end text -->
                                          </div>
                                    </div>
                                </div>
                        </div>
                    </div>  </div>
                     <!--end car2-->
                                                      <!--start car6-->
                                                      <div class="item">  <div  data-aos="fade-right"  data-aos-easing="ease-out-cubic"
                                                        data-aos-duration="2500">
                                                            <div class="col-md-12 flip-card-container">
                                                                    <div class="flip-card">
                                                                      <div class="flip-card-front">
                                                                        <img
                                                                          class="img-responsive"
                                                                          src="./images/cars-images/toyota-prado.png"
                                                                          alt="car image"
                                                                        />
                                                                        <div class="carText">
                                                                            <h1>Prado</h1>
                                                                        </div>
                                                                      </div>
                                                                      <div class="flip-card-back">
                                                                        <div class="carText text-left">
                                                                            <h4>Toyota Prado</h4>
                                                                            <!-- here text goes -->
                                                                            <ul>
                                                                              <li>
                                                                                  <span><small>Transmission:</small></span>
                                                                                  <span class="spec">Variable</span>
                                                                                </li>
                                                                                <li>
                                                                                  <span><small>Exterior:</small></span>
                                                                                  <span class="spec">Black</span>
                                                                                </li>
                                                                              <li><span><small>Suspension:</small></span> <span class="spec">Suspension with Stabilizer</span></li>
                                                                           
                                                                          
                                                                            </ul>
                                                                            <ul>
                                                                                <li>
                                                                                    <span class="price">Net Price</span>
                                                                                    <span class="price">-</span>
                                                                                </li>
                                                                            </ul>
                                                        
                                                                            <div class="rent">
                                                                                  <a href="#cars"  onclick="openBox()" class="btn btn-primary">Rent Now</a
                                                                              >
                                                                            </div>
                                                                            <!-- end text -->
                                                                          </div>
                                                                      </div>
                                                                    </div>
                                                            </div>
                                                        </div>  </div>
                            
                                                    
                                                            <!--end car7-->
                    <!--start car3-->
                    <div class="item">  <div  data-aos="fade-right"  data-aos-easing="ease-out-cubic"
                    data-aos-duration="2500">
                        <div class="col-md-12 flip-card-container">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                    <img
                                        class="img-responsive"
                                        src="./images/cars-images/fortuner.png"
                                        alt="car image"
                                    />
                                    <div class="carText">
                                        <h1>Fortuner</h1>
                                    </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <div class="carText text-left">
                                            <h4>Toyota Fortuner</h4>
                                            <!-- here text goes -->
                                            <ul>
                                              <li>
                                                  <span><small>Transmission:</small></span>
                                                  <span class="spec">Variable</span>
                                                </li>
                                                <li>
                                                  <span><small>Exterior:</small></span>
                                                  <span class="spec">Silver Metallic</span>
                                                </li>
                                              <li><span><small>Suspension:</small></span> <span class="spec">Double Wishbone + Coil</span></li>
                                           
                                          
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span class="price">Net Price</span>
                                                    <span class="price">-</span>
                                                </li>
                                            </ul>
                        
                                            <div class="rent">
                                                  <a href="#cars"  onclick="openBox()" class="btn btn-primary">Rent Now</a
                                              >
                                            </div>
                                            <!-- end text -->
                                          </div>
                                    </div>
                                </div>
                        </div>
                    </div>  </div>
                        <!--end car3-->
                    <!--start car4-->
                    <div class="item">  <div  data-aos="fade-right"  data-aos-easing="ease-out-cubic"
                    data-aos-duration="2500">
                        <div class="col-md-12 flip-card-container">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                    <img
                                        class="img-responsive"
                                        src="./images/cars-images/toyota-land-cruiser-saloon-black.png"
                                        alt="car image"
                                    />
                                    <div class="carText">
                                        <h1>Land Cruiser</h1>
                                    </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <div class="carText text-left">
                                            <h4>Toyota Land Cruiser</h4>
                                            <!-- here text goes -->
                                            <ul>
                                              <li>
                                                  <span><small>Transmission:</small></span>
                                                  <span class="spec">Variable</span>
                                                </li>
                                                <li>
                                                  <span><small>Exterior:</small></span>
                                                  <span class="spec">Black Mica</span>
                                                </li>
                                              <li><span><small>Suspension:</small></span> <span class="spec">Independent Double  <br>  Wishbone</span></li>
                                           
                                          
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span class="price">Net Price</span>
                                                    <span class="price">-</span>
                                                </li>
                                            </ul>
                        
                                            <div class="rent">
                                                  <a href="#cars"  onclick="openBox()" class="btn btn-primary">Rent Now</a
                                              >
                                            </div>
                                            <!-- end text -->
                                          </div>
                                    </div>
                                </div>
                        </div>
                    </div>  </div>
                        <!--end car4-->
                        <!--start car5-->
                        <div class="item">  <div  data-aos="fade-right"  data-aos-easing="ease-out-cubic"
                            data-aos-duration="2500">
                                <div class="col-md-12 flip-card-container">
                                        <div class="flip-card">
                                            <div class="flip-card-front">
                                            <img
                                                class="img-responsive"
                                                src="./images/cars-images/2019 Toyota Camry Le Auto.png"
                                                alt="car image"
                                            />
                                            <div class="carText">
                                                <h1>Camry</h1>
                                            </div>
                                            </div>
                                            <div class="flip-card-back">
                                                <div class="carText text-left">
                                                    <h4>Toyota Camry</h4>
                                                    <!-- here text goes -->
                                                    <ul>
                                                      <li>
                                                          <span><small>Transmission:</small></span>
                                                          <span class="spec">Variable</span>
                                                        </li>
                                                        <li>
                                                          <span><small>Exterior:</small></span>
                                                          <span class="spec">Classic Silver</span>
                                                        </li>
                                                      <li><span><small>Suspension:</small></span> <span class="spec">(Front) MacPherson Strut</span></li>
                                                   
                                                  
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span class="price">Net Price</span>
                                                            <span class="price">-</span>
                                                        </li>
                                                    </ul>
                                
                                                    <div class="rent">
                                                          <a href="#cars"  onclick="openBox()" class="btn btn-primary">Rent Now</a
                                                      >
                                                    </div>
                                                    <!-- end text -->
                                                  </div>
                                            </div>
                                        </div>
                                </div>
                            </div>  </div>
                                <!--end car5-->

                        <!--start car6-->
                        <div class="item">  <div  data-aos="fade-right"  data-aos-easing="ease-out-cubic"
                            data-aos-duration="2500">
                                <div class="col-md-12 flip-card-container">
                                        <div class="flip-card">
                                          <div class="flip-card-front">
                                            <img
                                              class="img-responsive"
                                              src="./images/cars-images/Luxury.png"
                                              alt="car image"
                                            />
                                            <div class="carText">
                                                <h1>Lexus</h1>
                                            </div>
                                          </div>
                                          <div class="flip-card-back">
                                            <div class="carText text-left">
                                                <h4>Lexus Luxury</h4>
                                                <!-- here text goes -->
                                                <ul>
                                                  <li>
                                                      <span><small>Transmission:</small></span>
                                                      <span class="spec">Variable</span>
                                                    </li>
                                                    <li>
                                                      <span><small>Exterior:</small></span>
                                                      <span class="spec">Super White</span>
                                                    </li>
                                                  <li><span><small>Suspension:</small></span> <span class="spec">Independent Double  <br>  Wishbone</span></li>
                                               
                                              
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <span class="price">Net Price</span>
                                                        <span class="price">-</span>
                                                    </li>
                                                </ul>
                            
                                                <div class="rent">
                                                      <a href="#cars"  onclick="openBox()" class="btn btn-primary">Rent Now</a
                                                  >
                                                </div>
                                                <!-- end text -->
                                              </div>
                                          </div>
                                        </div>
                                </div>
                            </div>  </div>

                        
                                <!--end car7-->
  
        </div>
    </div>
</div>
</section>

<div class="my-spacer my-spacer-xs"></div>
<!--owl cars end-->




                               <!-- start contact-->

        <section id="contact">
                <div class="row">
                    <div class="col-md-12">
    
                        <div class="container-contact100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.009526031196!2d44.19697111432807!3d15.321717463106161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1603dbeefc1d4559%3A0xf6c39ca45d9d6351!2z2LTYsdmD2Kkg2KrYtNmK2KrYpyDZhNiq2KPYrNmK2LEg2KfZhNiz2YrYp9ix2KfYqiDZiNiu2K_Zhdin2Kog2KfZhNmG2YLZhA!5e0!3m2!1sen!2s!4v1579512048846!5m2!1sen!2s" width="100%" height="700" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            <a style='color: white;' class="open" onclick="openBox()" id='FindUs'>Find Us</a>
                            <div class="overlay" style="display:none;">
                                <div class="layer-outer">
                                    <div class="layer-inner">
                                        <span >
                                            <div class='closeBtn close'></div>
                                        <div class="wrap-contact100">
    
                                            <div class='ContactForm-title'>Contact Us</div>
                                            <div class='ContactForm-title2'>Feel free to drop us a line below!</div>
    
                                            <form class=" contact100-form validate-form" method="POST">
                                                <div class="wrap-input100 validate-input" data-validate="Name is required">
                                                    <span class="label-input100">Full Name:</span>
                                                    <input class="input100" type="text" name="fullName" placeholder="Enter full name" required>
                                                    <span class="focus-input100"></span>
                                                </div>
    
    
                                                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                                    <span class="label-input100">Email:</span>
                                                    <input class="input100" type="text" name="email" placeholder="Enter email addess" required>
                                                    <span class="focus-input100"></span>
                                                </div>
    
                                                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                                                    <span class="label-input100">Phone:</span>
                                                    <input class="input100" type="text" name="phone" placeholder="Enter phone number" required>
                                                    <span class="focus-input100"></span>
                                                </div>
    
                                                <div class="wrap-input100 validate-input" data-validate="Date is required">
                                                    <span class="label-input100">Arrival date</span>
                                                    <input class="input100" type="date" name="date" placeholder="Enter date" required>
                                                    <span class="focus-input100"></span>
                                                </div>
    
    
                                                <div class="wrap-input100 validate-input" data-validate="Time of arrival is required">
                                                    <span class="label-input100">Time arrival:</span>
                                                    <input class="input100" type="time" name="time" placeholder="Enter time number" required>
                                                    <span class="focus-input100"></span>
                                                </div>
    
                                                <div class="wrap-input100 validate-input" data-validate="Airport is required">
                                                        <span class="label-input100 ">Airport:</span>
                                                            <select class='input100 dropDownLabel' required>
                                                            <option value="Aden">Aden</option>
                                                            <option value="Seiyun">Seiyun</option>
                                                            </select>
                                                        <span class="focus-input100"></span>
                                                    </div>
    
                                                <div class="wrap-input100 validate-input" data-validate="Message is required">
                                                    <span class="label-input100">Message:</span>
                                                    <textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
                                                    <span class="focus-input100"></span>
                                                </div>
    
                                                <div class="container-contact100-form-btn">
                                                    <button class="contact100-form-btn">
    
                                        <span>
                                            Submit
                                        </span>
                                    </button>
                                 </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Contact us -->
            </main>


            <footer>
                <div class="containerEn">
                    <div class="linksFooter">
                        <h3>Links</h3>
                        <ul>
                            <a href="#">
                                <li>Home</li>
                            </a>
                            <a href="#about">
                                <li>About Us</li>
                            </a>
                            <a href="#services">
                                <li>Services</li>
                            </a>
                            <a href="#cars">
                                <li>Cars</li>
                            </a>
                            <a href="#contact">
                                <li>Contact Us</li>
                            </a>

                        </ul>
                    </div>

                    <div>
                        <h3>Subscribe</h3>
                        <form action="">
                            <input type="text" placeholder="Enter your email...">
                            <button class="subscribeBtn">SUBMIT</button>
                        </form>

                    </div>
                    <div class="fullSocial">
                        <h3>Social</h3>
                        <div class="social">
                            <span><a href="https://www.facebook.com/cheetahye/"><div class="Icon facebook"></div><h7>/cheetahye</h7></a></span>
                            <span><a href="mailto:info@cheetahye.com"><div class="Icon mail"></div><h7>cheetahye@gmail.com</h7></a></span>
                            <span><a><div class="Icon call"></div><h7>+967-777-726-877</h7></a></span>

                        </div>
                    </div>

                </div>

            </footer>

            <!--===============================================================================================-->
            <script src="./js/vendor/jquery/jquery-3.2.1.min.js"></script>
            <script src="./js/vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
            <script src="js/main.js"></script>
            <!--===============================================================================================-->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
            <!--===============================================================================================-->


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./js/owl.carousel.js"></script>

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoHeight: true,
    responsive:{
        0:{
            items:1,
            nav:true,
            autoHeight: true,

        },
        600:{
            items:2,
            nav:true,
            autoHeight: true,

        },
        1000:{
            items:3,
            nav:true,
            loop:true,
            autoHeight: true,

        }
    }
})	

</script>
        </main>
    </body>

</html>