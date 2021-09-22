<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Change Password | Admin</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    
    <link href="{{ asset('/assets/css/profile.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">{{ session()->get('admin') }}</span>
                    <span></span>
                </div>
            </div>
            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Change Password</h4>
                    </div>
                    <form action="{{route('admin.changepassword')}}" method="POST">
                    @csrf
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Current Password <label class="text-danger h6">*</label></label>
                                <input type="password" name="current_Password" class="form-control" placeholder="Enter Current Password" value="">
                            </div>
                            @error('current_Password')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12">
                                <label class="labels">New Password <label class="text-danger h6">*</label></label>
                                <input type="password" name="new_Password" class="form-control" placeholder="Enter New Password" value="">
                            </div>
                            @error('new_Password')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12">
                                <label class="labels">Confirm Password <label class="text-danger h6">*</label></label>
                                <input type="password" name="confirm_Password" class="form-control" placeholder="Enter Confirm Password" value="">
                            </div>
                            @error('confirm_Password')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="mt-5 text-center">
                            <a class="btn btn-outline-warning text-dark mr-2" href="{{route('admin.home')}}" >Back</a>
                            <input class="btn btn-outline-success text-dark ml-2" type="submit" id="submit" value="Save">
                        </div>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(Session::has('change-success'))
        <script>
            swal({
               title: "Successfull!",
               text: "Password Changed Successfully",
               icon: "success",
               button: "OK",
            }).then(function() {
               window.location = "/admin/home";
               <?php
                  Session::forget('change-success');
               ?>
            });
        </script>
    @endif
    @if(Session::has('change-fail'))
        <script>
            swal({
               title: "Failed!",
               text: "Current Password did not match",
               icon: "error",
               button: "OK",
            }).then(function() {
               window.location = "/admin/changepassword";
               <?php
                  Session::forget('change-fail');
               ?>
            });
        </script>
    @endif
    @if(Session::has('change-fail2'))
        <script>
            swal({
               title: "Failed!",
               text: "Your current Password and new Password are same",
               icon: "error",
               button: "OK",
            }).then(function() {
               window.location = "/admin/changepassword";
               <?php
                  Session::forget('change-fail2');
               ?>
            });
        </script>
    @endif
</body>

</html>