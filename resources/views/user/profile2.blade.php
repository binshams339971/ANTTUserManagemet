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
    
    
    <link href="{{ asset('/assets/css/profile.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">{{ session()->get('name') }}</span>
                    <span class="text-black-50">{{ session()->get('email') }}</span>
                    <span></span>
                </div>
            </div>
            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="{{route('user.profile')}}" method="POST">
                    @csrf
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Full Name <label class="text-danger h6">*</label></label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Full Name" value="{{ session()->get('name') }}">
                            </div>
                        </div>
                        @error('name')
                            <span class="text-danger" role="alert">
                                <strong style="font-size: 12px;">{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number <label class="text-danger h6">*</label></label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Phone number" value="">
                            </div>
                            @error('phone')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12">
                                <label class="labels">School Name <label class="text-danger h6">*</label></label>
                                <input type="text" name="school" class="form-control" placeholder="Enter School Name" value="">
                            </div>
                            @error('school')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12">
                                <label class="labels">Class <label class="text-danger h6">*</label></label>
                                <input type="text" name="class" class="form-control" placeholder="Enter Class" value="">
                            </div>
                            @error('class')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12">
                                <label class="labels">Address <label class="text-danger h6">*</label></label>
                                <input type="text" name="address" class="form-control" placeholder="Enter Address" value="">
                            </div>
                            @error('address')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12">
                                <label class="labels">City <label class="text-danger h6">*</label></label>
                                <input type="text" class="form-control" name="city" placeholder="City" value="">
                            </div>
                            @error('city')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels">Country <label class="text-danger h6">*</label></label>
                                <input type="text" name="country" class="form-control" placeholder="Country" value="">
                            
                                @error('country')
                                    <span class="text-danger" role="alert">
                                        <strong style="font-size: 12px;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Post Code<label>.</label></label>
                                <input type="text" class="form-control" name="postcode" placeholder="Postcode" value="">

                                @error('postcode')
                                    <span class="text-danger" role="alert">
                                        <strong style="font-size: 12px;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>
                        <div class="mt-5 text-center">
                            <a class="btn btn-outline-warning text-dark mr-2" href="{{route('dashboard')}}" >Back</a>
                            <input class="btn btn-outline-success text-dark ml-2" type="submit" id="submit" value="Save Profile">
                        </div>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    </div>
    </div>
    
</body>

</html>