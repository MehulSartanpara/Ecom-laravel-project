<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Login</title>
      <link href="{{ url('adminn/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/bootstrap.css') }}" />
      <!-- font awesome style -->
      <link href="{{ url('frontend/css/font-awesome.min.css') }}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ url('frontend/css/responsive.css') }}" rel="stylesheet" />
      <style>
        input{
            margin: 0 !important;
        } 
        input#email{
            text-transform: lowercase;
        }
      </style>
   </head>
   <body>
    <div class="container mt-3">
        <a href="{{ url('/') }}">
            <img width="250" src="{{ url('frontend/images/logo.png') }}" alt="#" class="mt-2 mb-3">
        </a>
    <form action="{{ url('/register') }}" method="post" enctype="multipart/form-data">
    @csrf 
        <div class="row jumbotron box8" style="margin-bottom: 0;">
            <div class="col-sm-12 mx-t3 mb-4">
                <h2 class="text-center text-danger font-weight-bold">Register</h2>
            </div>
            <div class="col-sm-6 form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your first name" required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('firstname')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-6 form-group">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter your last name" required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('lastname')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-6 form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-6 form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('username')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-6 form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('address')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-4 form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Enter your city name." required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('city')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-2 form-group">
                <label for="pincode">Pin-Code</label>
                <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Pin-Code." required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('pincode')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-6 form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="form-control browser-default custom-select">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="unspesified">Unspecified</option>
                </select>
                <small id="emailHelp" class="form-text text-danger">
                    @error('gender')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            
            <div class="col-sm-6 form-group">
                <label for="number">Phone</label>
                <input type="number" name="number" class="form-control" id="number" placeholder="Enter Your Contact Number." required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('number')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-6 form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password." required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-6 form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="Re-enter your password." required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('confirmpassword')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-12 form-group">
                <label for="customFile">Profile</label>
                <input type="file" name="image" class="form-control" style="padding-bottom: 35px;">
                <small id="emailHelp" class="form-text text-danger">
                    @error('image')
                        {{ $message }}
                    @enderror
                </small>
            </div>

            <div class="col-sm-12 form-group mb-0">
                <button type="submit" class="btn btn-primary float-right">
                    Register
                </button>
            </div>
        </div>
    </form>
    <span class="col-sm-12 form-group mt-1">
            <span class="float-right">
                Already register &nbsp 
                <a href="{{ url('/login') }}" class="float-right">
                    login ?
                </a>
            </span>
        </span>
    </div>

      <!-- jQery -->
      <script src="{{ url('frontend/js/jquery-3.4.1.min.js') }}"></script>
      <!-- popper js -->
      <script src="{{ url('frontend/js/popper.min.js') }}"></script>
      <!-- bootstrap js -->
      <script src="{{ url('frontend/js/bootstrap.js') }}"></script>
      <!-- custom js -->
      <script src="{{ url('frontend/js/custom.js') }}"></script>
   </body>
</html>