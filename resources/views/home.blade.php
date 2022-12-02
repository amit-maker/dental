


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">




        <!-- Styles -->
        
    </head>
    <body class="antialiased">
            
                
            

            <header class="header fixed-top">

                <div class="container">

                    <div class="row align-items-center justify-content-between">

                        <a href="#home" class="logo">dental<span>Care.</span></a>

                        <nav class="nav">
                            <a href="#home">home</a>
                            <a href="#about">about</a>
                            <a href="#services">services</a>
                            <a href="#reviews">reviews</a>
                            <a href="#footer">contact</a>
                        

                        </nav>

                        
                        <a href="#contact" class="link-btn">make appointment</a>

                        <nav  class="link-btn">
                            @guest
                                    @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @endif

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                    @endif
                                    @else
                                    <li class="dropdown">
                                        <a  class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-content" >
                                            <a class="" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        </div>
                                    </li>
                            @endguest
                    </nav>
                        

                        <div id="menu-btn" class="fas fa-bars"></div>

                    

                </div>

                </header>

                <!-- header section ends -->

                <!-- home section starts  -->

                <section class="home" id="home">

                <div class="container">

                    <div class="row min-vh-100 align-items-center">
                        <div class="content text-center text-md-left">
                            <h3>let us brighten your smile</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora voluptatibus.</p>
                            <a href="#contact" class="link-btn">make appointment</a>
                        </div>
                    </div>

                </div>

                </section>

                <!-- home section ends -->

                <!-- about section starts  -->

                <section class="about" id="about">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-md-6 image">
                            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                        </div>

                        <div class="col-md-6 content">
                            <span>about us</span>
                            <h3>True Healthcare For Your Family</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
                            <a href="#contact" class="link-btn">make appointment</a>
                        </div>

                    </div>

                </div>

                </section>

                <!-- about section ends -->

                <!-- services section starts  -->

                <section class="services" id="services">

                <h1 class="heading">our services</h1>

                <div class="box-container container">

                    <div class="box">
                        <img src="images/icon-1.svg" alt="">
                        <h3>Alignment specialist</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
                    </div>

                    <div class="box">
                        <img src="images/icon-2.svg" alt="">
                        <h3>Cosmetic dentistry</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
                    </div>

                    <div class="box">
                        <img src="images/icon-3.svg" alt="">
                        <h3>Oral hygiene experts</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
                    </div>

                    <div class="box">
                        <img src="images/icon-4.svg" alt="">
                        <h3>Root canal specialist</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
                    </div>

                    <div class="box">
                        <img src="images/icon-5.svg" alt="">
                        <h3>Live dental advisory</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
                    </div>

                    <div class="box">
                        <img src="images/icon-6.svg" alt="">
                        <h3>Cavity inspection</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
                    </div>

                </div>

                </section>

                <!-- services section ends -->

                <!-- process section starts  -->

                <section class="process">

                <h1 class="heading">work process</h1>

                <div class="box-container container">

                    <div class="box">
                        <img src="images/process-1.png" alt="">
                        <h3>Cosmetic Dentistry</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
                    </div>

                    <div class="box">
                        <img src="images/process-2.png" alt="">
                        <h3>Pediatric Dentistry</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
                    </div>

                    <div class="box">
                        <img src="images/process-3.png" alt="">
                        <h3>Dental Implants</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
                    </div>

                </div>

                </section>

                <!-- process section ends -->

                <!-- reviews section starts  -->

                <section class="reviews" id="reviews">

                <h1 class="heading"> satisfied clients </h1>

                <div class="box-container container">

                    <div class="box">
                        <img src="images/pic-1.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3>john deo</h3>
                        <span>satisfied client</span>
                    </div>

                    <div class="box">
                        <img src="images/pic-2.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3>john deo</h3>
                        <span>satisfied client</span>
                    </div>

                    <div class="box">
                        <img src="images/pic-3.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3>john deo</h3>
                        <span>satisfied client</span>
                    </div>

                </div>

                </section>

                <!-- reviews section ends -->

                <!-- contact section starts  -->

                <section class="contact" id="contact">


                <h1 class="heading">Make Appointment</h1>
                 
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf

                        <div  style=" font-size: 15px;">
                        @if(session()->has('message'))
                                              <div class="alert alert-success" style="width: 300px;">
                                                <button type="button" class="close" data-dismiss="alert">x</button>
                                                {{ session()->get('message') }}

                                              </div>


                         @endif
                        </div>
                
                        <span> Name :</span>
                        <input type="text" name="name" placeholder="enter your name" class="box" required>
                        <span> Email :</span>
                        <input type="email" name="email" placeholder="enter your email" class="box" required>
                        <span> Number :</span>
                        <input type="number" name="number" placeholder="enter your number" class="box" required>
                        <span> Addresh :</span>
                        <input type="text" name="addresh" placeholder="enter your addresh" class="box" required>
                        <span> Appointment Date Time :</span>
                        <input type="datetime-local" name="date" class="box" required>
                        <input type="submit" value="make appointment" name="submit" class="link-btn">
                    </form>  

                </section>

                <!-- contact section ends -->

                <!-- footer section starts  -->

                <section class="footer" id="footer" >
                


                <div class="box-container container">

                    <div class="box">
                        <i class="fas fa-phone"></i>
                        <h3>Phone Number</h3>
                        <p>987654321</p>
                        <p>987654321</p>
                    </div>
                    
                    <div class="box">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Our Address</h3>
                        <p>Biratnagar,Nepal</p>
                    </div>

                    <div class="box">
                        <i class="fas fa-clock"></i>
                        <h3>Opening Hours</h3>
                        <p>08:00am to 10:00pm</p>
                    </div>

                    <div class="box">
                        <i class="fas fa-envelope"></i>
                        <h3>Email Address</h3>
                        <p>amitrouniyar@gmail.com</p>
                        <p>amit@gmail.com</p>
                    </div>

                </div>

                </section>

        

                <!-- footer section ends -->

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
            
    </body>
</html>
