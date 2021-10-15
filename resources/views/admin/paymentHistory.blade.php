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
    <title>Payment History | ANTT Robotics</title>
</head>

<body id="body-pd" class="body-pd">

    @include('layout.adminsidebar')

  
    <div class="container-fluid">
        <h1>Payment History</h1>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Payment ID</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Payment Date</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                        <tr>
                            <th scope="row"> {{ $payment->id }}</th>
                            <td>{{ $payment->order_id }}</td>
                            <td>{{ $payment->transaction_id }}</td>
                            <td>{{ $payment->amount }}</td>
                            <td>{{ $payment->status }}</td>
                            <td>{{ $payment->name }}</td>
                            <td>{{ $payment->email }}</td>
                            <td>{{ $payment->phone }}</td>
                            <td>{{ $payment->address }}</td>
                            <td>{{ \Carbon\Carbon::parse( $payment->created_at )->format('d-m-Y h:i:s')}}</td>
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