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
    <title>All Order's | ANTT Robotics</title>
</head>

<body id="body-pd" class="body-pd">

    @include('layout.sidebar')

  
    <div class="container-fluid">
        <h1>Your Orders</h1>
        <div class="table-responsive">
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
                        <td>{{ $order->status }}</td>
                        @if($order->status == "Pending")
                        <td><a href="{{ route('paynow', ['orderid'=>$order->id, 'productname'=>$order->name, 'price'=>$order->price, 'name'=>$order->studentname, 'phone'=>$order->phone, 'email'=>$order->email, 'address'=>$order->address, 'state'=>$order->city, 'country'=>$order->country, 'postcode'=>$order->postcode] )}}" class="btn btn-outline-secondary" id="sslczPayBtn"> Pay Now </a></td>
                        @elseif($order->status == "Paid")
                        <td><a href="" class="btn btn-success disabled" id="sslczPayBtn"> Paid </a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
    
    <!--=====Popup Message=====-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     @if(Session::has('pay-success'))
        <script>
           swal({
              title: "Payment Successful!",
              text: "Your payment has been successfully completed.",
              icon: "success",
              button: "OK",
           }).then(function() {
              window.location = "/user/order";
              <?php
                 Session::forget('pay-success');
              ?>
           });
        </script>
     @elseif(Session::has('pay-fail'))
        <script>
           swal({
              title: "Payment Failed!",
              text: "Your payment has been failed.",
              icon: "error",
              button: "OK",
           }).then(function() {
            window.location = "/user/order";
              <?php
                 Session::forget('pay-fail');
              ?>
           });
        </script>
     @elseif(Session::has('pay-cancel'))
        <script>
           swal({
              title: "Payment Cancelled!",
              text: "Your payment has been cancelled",
              icon: "error",
           }).then(function() {
            window.location = "/user/order";
              <?php
                 Session::forget('pay-cancel');
              ?>
           });
        </script>
     @endif
</body>

</html>