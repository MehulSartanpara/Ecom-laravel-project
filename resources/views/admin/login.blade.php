<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Admin - Login</title>
  <!-- Custom fonts for this template-->
  <link href="{{ url('adminn/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ url('adminn/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ url('adminn/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-3 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5" style="margin-top: 7rem!important;">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" action="{{ url('/admin') }}" method="post">
                    @csrf
                        <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                            name="email" placeholder="Enter Email Address">
                            <small id="emailHelp" class="form-text text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                            </small>
                        </div>
                        <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
                        <small id="emailHelp" class="form-text text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                            </small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</a>
                        </div>
                  </form>
              </div>
                @if (session('error'))
                    <div class="myAlert-bottom alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('error') }}
                    </div>
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('adminn/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('adminn/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('adminn/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('adminn/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->    
    <script src="{{ url('adminn/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('adminn/vendor/chart.js/Chart.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('adminn/js/sb-admin-2.js') }}"></script>
    <script src="{{ url('adminn/js/sb-admin-2.min.js') }}"></script>
    
</body>

</html>