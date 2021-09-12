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