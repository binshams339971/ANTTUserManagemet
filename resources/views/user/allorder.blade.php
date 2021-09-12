<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="{{ asset('/assets/css/dashboard.css') }}" rel="stylesheet" />
</head>

<body>
<div class="row">
    <div class="col-2 col-md-2">
        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">ANTT ROBOTICS LTD.</a>
                    <div id="close-sidebar">
                    <i class="d-block d-md-none fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                    <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                        alt="User picture">
                    </div>
                    <div class="user-info">
                    <span class="user-name">{{ session()->get('name') }}</span>
                    <span class="user-role">User</span>
                    <span class="user-status">
                        <i class="fa fa-circle"></i>
                        <span>Online</span>
                    </span>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li class="">
                        <a href="{{route('dashboard')}}">
                        <i class="fa fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="{{route('course')}}">
                        <i class="fa fa-book"></i>
                        <span>Courses</span>
                        <span class="badge badge-pill badge-danger">8</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="{{route('shop')}}">
                        <i class="far fa-gem"></i>
                        <span>Products</span>
                        <span class="badge badge-pill badge-danger">2</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="{{route('allorder')}}">
                        <i class="fa fa-chart-line"></i>
                        <span>Orders</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('home')}}">
                        <i class="fa fa-globe"></i>
                        <span>ANTT Robotics</span>
                        </a>
                    </li>
                    <li class="header-menu">
                        <span>Extra</span>
                    </li>
                    <li>
                        <a href="{{route('user.profile')}}">
                        <i class="fa fa-user"></i>
                        <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.changepassword')}}">
                        <i class="fa fa-unlock-alt"></i>
                        <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">
                        <i class="fa fa-arrow-right"></i>
                        <span>Logout</span>
                        </a>
                    </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
                </div>
                <!-- sidebar-content  -->
                </nav>
          </div>
    </div>
    <div class="col-md-10 col-10 px-5 py-4">
        <h1>Your Orders</h1>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Order Date</th>
                <th scope="col">Status</th>
                <th scope="col">Payment</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <th scope="row"> {{ $order->id }}</th>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->category }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ \Carbon\Carbon::parse( $order->created_at )->format('d-m-Y')}}</td>
                    <td>Pending</td>
                    <td><a class="btn btn-outline-warning">Pay now</a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
          
    </div>
</div>
  <!-- sidebar-wrapper  -->
    <script>
        jQuery(function ($) {
            $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);
            if (
            $(this)
            .parent()
            .hasClass("active")
            ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
            .parent()
            .removeClass("active");
            } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
            .next(".sidebar-submenu")
            .slideDown(200);
            $(this)
            .parent()
            .addClass("active");
            }
            });

            $("#close-sidebar").click(function() {
            $(".page-wrapper").removeClass("toggled");
            });
            $("#show-sidebar").click(function() {
            $(".page-wrapper").addClass("toggled");
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>