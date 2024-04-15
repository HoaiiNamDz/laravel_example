<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="backend/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="backend/css/style.css">

    <title>Admin Login</title>
  </head>
  <body>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="backend/img/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                <h3>Admin login</h3>
              </div>
              <form action="{{ route('auth.login')}}" method="post">
                @csrf
                <div class="form-group first mb-2">
                  <label for="email"></label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email')}}" >
                </div>
                @if ($errors -> has('email'))
                  <p class="alert alert-danger">{{ $errors->first('email')}}</p>
                @endif
                <div class="form-group last mb-4">
                  <label for="password"></label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                @if ($errors -> has('password'))
                  <p class="alert alert-danger">{{ $errors->first('password')}}</p>
                @endif
                
                <div class="d-flex mb-5 align-items-center">
                  <p class="my-5"><a href="#" class="forgot-pass">Forgot Password</a></p> 
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

              </form>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>