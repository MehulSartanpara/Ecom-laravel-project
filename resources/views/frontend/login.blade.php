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
    <div class="container" style="max-width: 500px; margin-top: 10em;">
        <a href="{{ url('/') }}">
            <img width="250" src="{{ url('frontend/images/logo.png') }}" alt="#" class="mt-2 mb-3">
        </a>
    <form action="{{ url('/login') }}" method="post" enctype="multipart/form-data">
    @csrf 
        <div class="row jumbotron box8" style="padding: 2rem 2rem; margin-bottom: 0;">
            <div class="col-sm-12 mx-t3 mb-4">
                <h2 class="text-center text-danger font-weight-bold">LogIn</h2>
            </div>
            <div class="col-sm-12 form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-sm-12 form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="password." required>
                <small id="emailHelp" class="form-text text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </small>
            </div>

            <div class="col-sm-12 form-group mb-0">
                <button type="submit" class="btn btn-primary float-right">
                    Login
                </button>
            </div>
        </div>
    </form>
        <span class="col-sm-12 form-group mt-1">
            <span class="float-right">
                Don't have account &nbsp 
                <a href="{{ url('/register') }}" class="float-right">
                    register ?
                </a>
            </span>
        </span>
        @if (session('error'))
            <div class="myAlert-bottom alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('error') }}
            </div>
        @endif
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