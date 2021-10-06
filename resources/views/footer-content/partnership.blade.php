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

<title>Facilitate Industry 4.0</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
<link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/theme.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/customstyle.css') }}" rel="stylesheet" />
<script data-ad-client="ca-pub-9655498260594882" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161682547-1"></script>
<style>
    .btnsubmit {
        background: #ffc403;
  background-image: -webkit-linear-gradient(top, #f7c100, #ed9200);
  background-image: -moz-linear-gradient(top, #f7c100, #ed9200);
  background-image: -ms-linear-gradient(top, #f7c100, #ed9200);
  background-image: -o-linear-gradient(top, #f7c100, #ed9200);
  background-image: linear-gradient(to bottom, #f7c100, #ed9200);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Georgia;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  border: none;
}

.btnsubmit:hover {
    background: #ed9200;
  background-image: -webkit-linear-gradient(top, #ed9200, #f7c100);
  background-image: -moz-linear-gradient(top, #ed9200, #f7c100);
  background-image: -ms-linear-gradient(top, #ed9200, #f7c100);
  background-image: -o-linear-gradient(top, #ed9200, #f7c100);
  background-image: linear-gradient(to bottom, #ed9200, #f7c100);
  text-decoration: none;
}
</style>

</head>

<body>

<div class="page-wrapper">
    
@include('layout.bg-header')

<div class="container" style="margin-top: 100px;">
    <div class="bg-white rounded-lg shadow py-3 mb-4">
        <div class="col-sm-12 my-4">
            <h1 class="text-center">Let’s Work Together!</h1>
            <ol class="mx-md-5 ml-4 mr-2 text-left" style="list-style-type: decimal;">
                <h3 class="text-justify text-dark">Contact Us</h3>
                <p class="text-justify text-dark">For any information, you can get in touch with us using your contact information or by filling in the contact form below. Please fill in your details and we will get back to you at our earliest convenience.</p>
            </ol>
            <div class="row">
                <div class="col-md-2 d-md-block d-none"></div>
                <div class="col-md-8 col-sm-12">
                    <form action="{{route('partnership')}}" method="POST">
                        @csrf
                            <div class="row mt-2">
                                <div class="col-md-12"><p class="labels mb-0 text-left text-dark">Your Name</p>
                                    <input type="text" name="name" class="form-control" value="">
                                </div>
                            </div>
                            @error('name')
                                <span class="text-danger" role="alert">
                                    <strong style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="row mt-3">
                                <div class="col-md-12"><p class="labels mb-0 text-left text-dark">Email Address</p>
                                    <input type="text" name="email" class="form-control" value="">
                                </div>
                            </div>
                            @error('email')
                                <span class="text-danger" role="alert">
                                    <strong style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="row mt-3">
                                <div class="col-md-12"><p class="labels mb-0 text-left text-dark">Phone Number</p>
                                    <input type="text" name="phone" class="form-control" value="">
                                </div>
                            </div>
                            @error('phone')
                                <span class="text-danger" role="alert">
                                    <strong style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="row mt-3">
                                <div class="col-md-12"><p class="labels mb-0 text-left text-dark">What is your Organization?</p>
                                    <input type="text" name="organzation" class="form-control" value="">
                                </div>
                            </div>
                            @error('organzation')
                                <span class="text-danger" role="alert">
                                    <strong style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="row mt-3">
                                <div class="col-md-12"><p class="labels mb-0 text-left text-dark">Your Message</p>
                                    <textarea class="form-control" name="message" placeholder="" rows="7" data-form-field="Message"></textarea>
                                </div>
                            </div>
                            @error('message')
                                <span class="text-danger" role="alert">
                                    <strong style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="mt-5 text-center">
                                <button class="btnsubmit" type="submit" id="submit" value="">Contact Us</button>
                            </div>
                            
                    </form>
                </div>
                <div class="col-2"></div>
            </div>  
        </div>
    </div>
</div>

@include('layout.footer')
</div>

<!--new add-->
<script src="{{ asset('/assets/js/vendors/jquery.js') }}"></script>
<script src="{{ asset('/assets/js/vendors/bootstrap1.min.js') }}" />
<script src="{{ asset('/assets/js/vendors/bootstrap.min.js') }}"></script>
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