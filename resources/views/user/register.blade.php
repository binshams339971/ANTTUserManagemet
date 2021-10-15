<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Registration | ANTT Robotics Ltd.</title>
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
          </a>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="" id="">
               <input type="radio" name="" id="signup" checked>
               <label for="login" class="slide login"><a href="{{route('login')}}">Login</a></label>
               <label for="signup" class="slide signup">Sign Up</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form method="POST" action="{{route('register')}}" class="signup">
               @csrf
                  <div class="field">
                     <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                  </div>
                  @error('name')
                     <span class="text-danger" role="alert">
                        <strong style="font-size: 12px;">{{ $message }}</strong>
                     </span>
                  @enderror
                  <div class="field">
                     <input type="text" name="email" placeholder="Email Address" value="{{ old('email') }}">
                  </div>
                  @error('email')
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
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" id="submit" value="Sign Up">
                  </div>
                  <div class="other-login-signup my-3">
                    <div class="or-login-signup text-center">
                      <strong>Or Sign up With</strong>
                    </div>
                  </div>
                  <ul class="list-inline social-login-signup text-center">
                     <li class="list-inline-item my-1">
                        <a href="{{route('google')}}" class="btn btn-google"><i class="fab fa-google pr-1"></i> Google</a>
                     </li>
                    <li class="list-inline-item my-1">
                      <a href="{{route('facebook')}}" class="btn btn-facebook"><i class="fab fa-facebook-f pr-1"></i> Facebook</a>
                    </li>
                  </ul>
               </form>               
            </div>
         </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      @if(Session::has('register'))
         <script>
            swal({
               title: "Registration Successfull!",
               text: "Please login",
               icon: "success",
               button: "OK",
            }).then(function() {
               window.location = "login";
               <?php
                  Session::forget('register');
               ?>
            });
         </script>
      @endif      
   </body>
</html>