<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
      }
      .container {
        max-width: 600px;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
      }
      .form-group label {
        font-weight: bold;
      }
      .form-group input {
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      }
      .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 12px 20px;
        border-radius: 25px;
        width: 100%;
        transition: background-color 0.3s ease;
      }
      .btn-primary:hover {
        background-color: #0056b3;
      }
      .form-text {
        font-size: 0.875rem;
        color: #6c757d;
      }
      h1 {
        font-size: 28px;
        margin-bottom: 30px;
        text-align: center;
      }
      .text-danger {
        font-size: 0.875rem;
        color: #dc3545;
      }
    </style>
     <!-- Include jQuery and jQuery Validation Plugin -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  </head>
  <body>
      <div class="container">
        <h1>Registration Form</h1>
        <form method="POST" action="{{ route('Registration') }}">
            @csrf
            
            <!-- Name Field -->
            <div class="form-group mb-3">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Enter name" value="{{ old('name') }}" required>
                @if($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>

            <!-- Email Field -->
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @if($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <!-- Phone Field -->
            <div class="form-group mb-3">
                <label for="exampleInputPhone">Phone Number</label>
                <input type="tel" class="form-control" id="exampleInputPhone" name="phone" placeholder="Enter phone" value="{{ old('phone') }}" required>
                @if($errors->has('phone'))
                    <div class="text-danger">{{ $errors->first('phone') }}</div>
                @endif
            </div>

            <!-- Password Field -->
            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                @if($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
  <script>
    $(document).ready(function() {
    $("form").validate({
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 15,
                digits: true
            },
            password: {
              required: true,
              minlength: 6
            }
          
        },
        messages: {
            name: {
                required: "Please enter your full name.",
                minlength: "Name should be at least 3 characters long."
            },
            email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address."
            },
            phone: {
                required: "Please enter your phone number.",
                minlength: "Phone number should be at least 10 digits long.",
                maxlength: "Phone number should not be more than 15 digits.",
                digits: "Please enter a valid phone number."
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
