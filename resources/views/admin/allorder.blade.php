<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>All Orders | Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/a85a726e0f.js"></script>
    <link href="{{ asset('/assets/css/dashboard.css') }}" rel="stylesheet" />
</head>

<body>
<div class="row">
    <div class="col-1 col-md-2">
        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="{{route('home')}}">ANTT ROBOTICS LTD.</a>
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
                    <span class="user-name">{{ session()->get('admin') }}</span>
                    <span class="user-role">Admin</span>
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
                        <a href="{{route('admin.home')}}">
                        <i class="fa fa-home"></i>
                        <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="{{route('admin.allorder')}}">
                        <i class="fa fa-chart-line"></i>
                        <span>All Orders</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                        <i class="fa fa-user"></i>
                        <span>All Registered User's</span>
                        </a>
                    </li>
                    <li class="header-menu">
                        <span>Extra</span>
                    </li>
                    @if(session()->get('username') == "superadmin")
                    <li class="">
                        <a href="{{route('admin.newadmin')}}">
                        <i class="fa fa-users"></i>
                        <span>Add New Admin</span>
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="{{route('admin.changepassword')}}">
                        <i class="fa fa-unlock-alt"></i>
                        <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.logout')}}">
                        <i class="fa fa-sign-out"></i>
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
    <div class="col-md-10 col-10 px-md-5 py-5">
        <h1>All Orders</h1>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Order Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">School</th>
                    <th scope="col">Class</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
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
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->studentname }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->school }}</td>
                        <td>{{ $order->class }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->city }}</td>
                        <td>{{ $order->country }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
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