<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="{{ asset('/assets/css/dashboardstyles.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/newdashboard.css') }}">

        <title>Admin Dashboard | ANTT Robotics</title>
    </head>
    <body id="body-pd" class="body-pd">
        
        @include('layout.adminsidebar')

        <div>
            <div class="container-fluid">
                <h2>User's Activity</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-blue">
                            <div class="inner">
                                <h3> {{count($orders)}} </h3> </h3>
                                <p> Total Orders </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
        
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-green">
                            <div class="inner">
                                <h3> {{count($paid)}} </h3>
                                <p> Paid Orders </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-money"></i>
                            </div>
                            <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-orange">
                            <div class="inner">
                                <h3> ৳ {{$paidAmount}} </h3>
                                <p> Total Paid Amount </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-secondary">
                            <div class="inner">
                                <h3> {{count($pendings)}} </h3>
                                <p> Pending Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-info">
                            <div class="inner">
                                <h3> ৳ {{$pendingAmount}} </h3>
                                <p> Total Pending Amount </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
           $( document ).ready(function(){
                console.log($(this).width())
                if(window.innerWidth < 560){
                    $('div').removeClass('show')
                    $('i').removeClass('bx-x')
                    $('body').removeClass('body-pd')
                    $('header').removeClass('body-pd')
                }                
            })
        </script>
        <!--===== MAIN JS =====-->
        <script src="{{ asset('/assets/js/main.js') }}"></script>
        
    </body>
</html>