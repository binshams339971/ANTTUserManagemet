<!DOCTYPE html>
<html lang="en">
<head>

<!-- meta tags -->
<meta charset="utf-8">
<meta name="keywords" content="Industry 4.0, premium, multipurpose, saas" />
<meta name="description" content="Facilitate Industry 4.0" />

<meta property="fb:app_id"          content="284364716206031" /> 
<meta property="og:type"            content="website" /> 
<meta property="og:url"             content="https://www.anttrobotics.com/"/> 
<meta property="og:title"           content="Facilitate Industry 4.0" /> 
<meta property="og:image"           content="https://www.anttrobotics.com/public/frontend/assets/images/about/edu-iot.png" /> 
<meta property="og:image"           content="https://www.anttrobotics.com/public/frontend/assets/images/about/edubot2-1.png" /> 
<meta property="og:image"           content="https://www.anttrobotics.com/public/frontend/assets/images/portfolio/01.png" /> 
<meta property="og:image"           content="https://www.anttrobotics.com/public/frontend/assets/images/hero/School-of-Iot-with-dashboard-1200x700.png" />
<meta property="og:image:alt"           content="Image" /> 
<meta property="og:description"    content="STEM Learning Ecosystem for 4IR, IoT and Robotics" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="google-site-verification" content="z8eugNKi33OtVizosZQ5-bw5HKKo_uMibPyKUkvxVmU">

<title>Edublock Digital Manual | Facilitate Industry 4.0</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
<link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/theme.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/customstyle.css') }}" rel="stylesheet" />
<script data-ad-client="ca-pub-9655498260594882" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161682547-1"></script>

</head>

<body>

  <div class="page-wrapper">
      <!-- Navbar starts here -->
      <div class="header-top fixed-top container-fluid" style="background: #F9820E;"> 
        <nav class="navbar navbar-expand-lg navbar-light container-fluid px-0 mx-0">

            <a class="navbar-brand d-lg-none" href="{{ route('home') }}"><img src="https://edublock.co/anttaset/ANTTRobotics_logo_full%20white-04.png" class="nav-img-sm"></a>

            <button class="navbar-toggler mr-3 nav-tog-btn" type="button" data-toggle="collapse" data-target="#myNavbarToggler7"
                aria-controls="myNavbarToggler7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse nav-middle-sm" id="myNavbarToggler7">
                <div class="top-menu container-fluid d-lg-block px-0 mx-0">
                    <div class="navbar-nav nav-start" id="navstart">
                      <a class="d-none d-lg-block" href="{{ route('home') }}"><img src="https://edublock.co/anttaset/ANTTRobotics_logo_full%20white-04.png" alt="logo" class="nav-img"></a>
                        
                        <ul class="nav navbar-nav m-auto nav-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('solution') }}">Solution</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('course') }}">Course</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pressrelease') }}">Press Release</a>
                            </li>
                            <li class="nav-item">
                                @if(Session::has('email'))
                                    <a class="nav-link" href="{{route('dashboard')}}" class="page-scroll">My Account</a>
                                @else
                                    <a class="nav-link" href="{{route('login')}}" class="page-scroll">Sign in</a>
                                @endif
                            </li>
                        </ul>                
                                
                    </div>
                </div>
            </div>
        </nav>
        <div class="nav-bottom-bar-sm d-lg-none">
            <div class="d-flex justify-content-around p-2">
                <p class="d-flex my-auto text-dark">Fostering Ecosystem of Industry 4.0</p>
            </div>
        </div>
      </div>
      <!-- Navbar ends here -->
  
    <div class="container" style="margin-top:100px;">
      <div class="row">
          <div class="col-md-3 col-12 d-none d-md-block content0">
            <h4>Content</h4>
            <ol style="list-style-position: inside;">
              <li><a href="#manual1" class="ez-toc-link ez-toc-heading-1">What is EduBlock?</a></li>
              <li><a href="#manual2" class="ez-toc-link ez-toc-heading-1">EduBlock - Robots Details </a></li>
              <li><a href="#manual3" class="ez-toc-link ez-toc-heading-1">Sensors Details </a></li>
              <li><a href="#manual4" class="ez-toc-link ez-toc-heading-1">Connect EduBlock robot with your mobile phone</a></li>
              <li><a href="#manual5" class="ez-toc-link ez-toc-heading-1">Tutorials</a></li>
              <li><a href="#manual6" class="ez-toc-link ez-toc-heading-1">Basic Robotics & Programming Book</a></li>
            </ol>
          </div>

          <div class="col-md-9 col-12 d-block d-md-block">

            <h3 class="text-center">Edublock Digital Manual</h3>
            <img src="https://edublock.co/anttaset/product-asset/edublockdigital/edublock02.jpg" style="max-width: 100%; padding: 20px 0;">

            <div class="" id="manual1">
              <h5>What is EduBlock?</h5>
              <hr>
              <p class="text-justify text-dark">Edubot or Educational Robot might sound like it’s related to studies but that’s not true. Edubot is a microcontroller based control board which has all the components built in because of which, we can do any robotics project with it. In simple words, Edubot is a mini robot using which people like you who want to learn programming or robotics can easily learn the basics.</p>
            </div>

            <div class="">
              <h5>Download Mobile App for Coding</h5><hr>
              <div class="row">
                <div class="col-12 col-md-6 text-center">
                  <p class="">Download Mobile Application</p>
                  <a class="p-5" href="https://play.google.com/store/apps/details?id=co.edublock&hl=en&gl=US" target="_blank"><img class="playstore11" src="https://edublock.co/anttaset/googleplay.png"></a>
                </div>
                <div class="col-12 col-md-6 text-center">
                  <p class="mt-4 mt-md-0">Download from ANTT Robotics Website</p>
                  <a class="p-5" href="{{route('apkdownload')}}"><img class="playstore11" src="https://edublock.co/anttaset/product-asset/edublockdigital/edublockicon.png"></a>
                </div>
              </div>
            </div><br><br>

            <div class="" id="manual2">
              <h5>EduBlock - Robots Details </h5>
              <hr>
              <img src="https://edublock.co/anttaset/product-asset/edublockdigital/edublock03.png" style="max-width: 100%; padding: 20px 0;">
              <ul style="list-style-type: disc; list-style-position: inside;">
                <li class="text-justify ml-md-5">Robotics STEAM Toy for learning Programming languages and Robotics.</li>
                <li class="text-justify ml-md-5">Do yourself Code and make a lot of projects like Soccer Robot, Line follower, Distance Measurement Robot and so on.</li>
                <li class="text-justify ml-md-5">Learn Graphical programming, C programming, Python using EduBlock.</li>
                <li class="text-justify ml-md-5">Interactive Course Curriculum for Individual Education Level beside STEAM Method.</li>
                <li class="text-justify ml-md-5">Code, Control, Implement using Mobile Phone using Edublock App.</li>
                <li class="text-justify ml-md-5">No wire connection needed for basic learning. Plug & Play Hitech solutions using Modern technology.</li>
              </ul>
            </div><br><br>

            <div class="" id="manual3">
              <h5>Sensors Details </h5><hr>
              <ul style="list-style-type: disc; list-style-position: inside;" class="text-center">
                <img class="playstore" src="https://edublock.co/anttaset/product-asset/edublockdigital/edublock04.png"><br><br><span>MQ2 Gas Sensor</span><br><br>
                <li class="text-justify ml-md-5">Target Gas: Smoke/ Combustible Gas.</li>
                <li class="text-justify ml-md-5">Detection Range: 300～10000ppm(flammable gas).</li>
                <li class="text-justify ml-md-5">Application: domestic gas leakage alarm, portable gas detector.</li><br>
                <img class="playstore" src="https://edublock.co/anttaset/product-asset/edublockdigital/edublock05.png"><br><br>
                <li class="text-justify ml-md-5">Resistance : 400 ohm to 400 Kohm.</li>
                <li class="text-justify ml-md-5">Normal resistance variation: 1 Kohm to 10 Kohm.</li>
                <li class="text-justify ml-md-5">Sensitivity: about 3msec (Sensitivity is defined as the time taken for output to change when input changes.</li>
                <li class="text-justify ml-md-5"> Voltage ratings: used it on 3V, 5V and 12V.</li><br>
                <img class="playstore" src="https://edublock.co/anttaset/product-asset/edublockdigital/edublock06.jpg"><br><br>
                <li class="text-justify ml-md-5">Detection distance: 2 ~ 30cm</li>
                <li class="text-justify ml-md-5">Detection angle: 35 °</li>
                <li class="text-justify ml-md-5">Comparator chip: LM393</li>
                <li class="text-justify ml-md-5">3mm screw holes for easy mounting</li>
              </ul>
            </div><br><br>

            <div class="" id="manual4">
              <h5>Connect EduBlock robot with your mobile phone</h5><hr>
              <p class="text-justify text-dark ml-md-5">Connect EduBlock to your phone using Bluetooth:</p>
              <ol style="list-style-type: decimal; list-style-position: inside;" class="text-center">
                <li class="text-justify ml-md-5">Turn on the Power Switch of Edublock .</li>
                <li class="text-justify ml-md-5">Turn on “Bluetooth” of your phone. And scan for new device.</li>
                <li class="text-justify ml-md-5">A new device named “Edubot 3.0.0” will be shown on Bluetooth.</li>
                <li class="text-justify ml-md-5">The Edublock Bluetooth is paired with your phone now.</li>
                <li class="text-justify ml-md-5">Go to the Edublock app you have installed before. </li><br>
                <img class="eduapp" src="https://edublock.co/anttaset/product-asset/edublockdigital/edublock07.png"><br><br>
                <p class="text-justify text-dark ml-md-5">Click on the top right corner and you will see “Edubot 3.0.0” .Tap on it and the Edublock will be connected with your phone successfully.</p><br>
                <img class="eduapp" src="https://edublock.co/anttaset/product-asset/edublockdigital/edublock08.png"><br><br>
              </ol>
            </div>

            <div class="" id="manual5">
              <h5>Tutorials </h5><hr>
              <div class="ml-md-5">
                <iframe class="p-3" src="https://www.youtube.com/embed/yovAWlXtfFU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
              <iframe class="p-3" src="https://www.youtube.com/embed/fxNZK8hGxX8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe class="p-3" src="https://www.youtube.com/embed/v90K-fv5VG0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
              <iframe class="p-3" src="https://www.youtube.com/embed/ABkFyjZORDg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div><br>

            <div class="" id="manual6">
              <h5>Basic Robotics & Programming Book</h5><hr>
              <a class="ml-md-5" href="{{route('edublockdigitalmanualbook')}}">Click here to see</a>
            </div><br>
          </div>
      </div>
    </div>
    @include('layout.footer')
  </div>



<!--new add-->
<script src="{{ asset('/assets/js/vendors/jquery.js') }}"></script>
<script src="{{ asset('/assets/js/vendors/bootstrap1.min.js') }}" /></script>

<script src="{{ asset('/assets/js/vendors/popper.min.js') }}"></script>
<script src="{{ asset('/assets/js/vendors/jquery.easing.min.js') }}"></script>
<script src="{{ asset('/assets/js/vendors/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/assets/js/vendors/countdown.min.js') }}"></script>
<script src="{{ asset('/assets/js/vendors/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/assets/js/vendors/jquery.rcounterup.js') }}"></script>
<script src="{{ asset('/assets/js/vendors/magnific-popup.min.js') }}"></script>
<script src="{{ asset('/assets/js/vendors/validator.min.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
<script src="{{ asset('/assets/js/sb-admin-2.min.js') }}"></script>

<!--new add-->
<script src="{{ asset('/assets/js/theme-plugin.js') }}"></script>
<script src="{{ asset('/assets/js/theme-script.js') }}"></script>


<script  src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>

</html>

