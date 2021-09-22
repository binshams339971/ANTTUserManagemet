<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Admin Login</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link href="{{ asset('/assets/css/register.css') }}" rel="stylesheet" />
    </head>
   <body>
      <div class="wrapper">
         <div class="logo">
          <a class="" href="{{ route('home') }}">
            <img src="https://edublock.co/anttaset/ANTT_Orange_logo.png" class="">
          </a><hr>
         </div>
         <div class="form-container">
            <div class="signup-link text-center text-secondary">
                <h2>Admin Login</h2>   
            </div>
            <div class="form-inner">
               <form method="POST" action="{{route('admin.login')}}" class="signup">
               @csrf
                  <div class="field">
                     <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                  </div>
                  @error('username')
                     <span class="text-danger" role="alert">
                        <strong style="font-size: 12px;">{{ $message }}</strong>
                     </span>
                  @enderror
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" >
                  </div>
                  @error('password')
                     <span class="text-danger" role="alert">
                        <strong style="font-size: 12px;">{{ $message }}</strong>
                     </span>
                  @enderror
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link mt-5">
                     
                  </div>
               </form>
                          
            </div>
         </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      @if(Session::has('login101'))
         <script>
            swal({
               title: "Please Login!",
               text: "You need to login first",
               icon: "warning",
               button: "OK",
            }).then(function() {
               window.location = "/admin/login";
               <?php
                  Session::forget('login101');
               ?>
            });
         </script>
      @elseif(Session::has('login0'))
         <script>
            swal({
               title: "Failed",
               text: "Password did not match!",
               icon: "error",
               button: "OK",
            }).then(function() {
               window.location = "/admin/login";
               <?php
                  Session::forget('login0');
               ?>
            });
         </script>
      @elseif(Session::has('login00'))
         <script>
            swal({
               title: "Failed",
               text: "Username not found!",
               icon: "error",
            }).then(function() {
               window.location = "/admin/login";
               <?php
                  Session::forget('login00');
               ?>
            });
         </script>
      @endif
   </body>
</html>