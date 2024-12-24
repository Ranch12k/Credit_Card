<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
      }
      .form-container {
        max-width: 500px;
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .form-group label {
        font-weight: bold;
      }
      .btn-custom {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 50px;
        width: 100%;
        transition: background-color 0.3s ease;
      }
      .btn-custom:hover {
        background-color: #0056b3;
      }
      .form-text {
        font-size: 0.875rem;
        color: #6c757d;
      }
    </style>
    <!-- Include jQuery and jQuery Validation Plugin -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  </head>
  <body>
    <div class="form-container">
      
           
      <h3 class="text-center mb-4">Log In</h3>
      <form method="POST" action="{{ route('User.login') }}" id="loginForm">
        @csrf
        <!-- Display Validation Errors -->
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }} <a href="{{route('User.VerificationPage')}}" class="btn btn-sm btn-success"></a></li>
              @endforeach
            </ul>
          </div>
        @endif
        
        <!-- Display Custom Authentication Error -->
        @if(session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
        @endif

        <div class="form-group mb-3">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required value="{{ old('email') }}">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
        </div>
        <div class="form-group form-check mb-3">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-custom">Submit</button>
        <a href="{{ route('github.login') }}" class="btn btn-sm  btn-success mt-2"> Social Login</a>
       
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Custom jQuery Validation -->
    <script>
      $(document).ready(function() {
        $("#loginForm").validate({
          rules: {
            email: {
              required: true,
              email: true
            },
            password: {
              required: true,
              minlength: 6
            }
          },
          messages: {
            email: {
              required: "Please enter your email address",
              email: "Please enter a valid email address"
            },
            password: {
              required: "Please enter your password",
              minlength: "Your password must be at least 6 characters long"
            }
          },
          errorElement: "div",
          errorClass: "alert alert-danger",
          validClass: "is-valid",
          highlight: function(element) {
            $(element).addClass("is-invalid").removeClass("is-valid");
          },
          unhighlight: function(element) {
            $(element).removeClass("is-invalid").addClass("is-valid");
          }
        });
      });
    </script>
  </body>
</html>
