<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Verificaton of Registration</title>
    <style>
        .container{
            height: 80vh;
        }
        .otphead{
            margin: 25px;
        }
        .card{
            height: 361px;
            width: 400px;
        }
        #otp{
            padding: 5px 22px;
        }
    </style>
</head>

<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="container  d-flex justify-content-center align-items-center">
        <div class="position-relative">
            <div class="card p-2 text-center">
                <h1 class="otphead">OTP</h1>
                <h6>Please enter the one time password <br> to verify your account</h6>
                <!-- <div> <span>A code has been sent to</span> <small>*******9897</small> </div> -->
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> 
                        <input class="m-2 text-center form-control rounded" type="text" name="first" id="first" maxlength="1" /> 
                        <input class="m-2 text-center form-control rounded" type="text" name="second" id="second" maxlength="1" /> 
                        <input class="m-2 text-center form-control rounded" type="text" name="third" id="third" maxlength="1" /> 
                        <input class="m-2 text-center form-control rounded" type="text" name="fourth" id="fourth" maxlength="1" />
                     
                    </div>
                <div class="mt-4"> <button class="btn btn-danger px-4 validate" id="Validate">Validate</button> </div>
            </div>
            <div class="card-2">
                <div class="content d-flex justify-content-center align-items-center"> <span>Didn't get the code</span>
                <!-- <a href="{{ route('User.ResendOTP', ['RgUserEamil' => $RgUserEamil]) }}" class="text-decoration-none ms-3" id='resend'>Resend</a> -->
                <form action="{{route('User.ResendOTP')}}" method="post">
                    @csrf
                    <input type="text" name="ReEmail" value="{{$RgUserEamil}}" style="visibility:hidden;">
                    <button type="submit">Resend</button>
                </form>
                <form action="{{route('User.AfterResendOTP')}}" method="post" id="AfterResendOTP" style="visibility:hidden;">
                    @csrf
                    <input type="text" name="ReEmail" value="{{$RgUserEamil}}" style="visibility:hidden;">
                </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


        <script>
          $(document).ready(function(){
            $("#Validate").click(function(){
                let first=$('#first').val();
                let second=$('#second').val();
                let third=$('#third').val();
                let fourth=$('#fourth').val();

                let E_OTP=first+second+third+fourth; 
                let OTP={{$OTP}};
                if(E_OTP==OTP){
                    alert("You Are Registered Successfully");
                    $('#AfterResendOTP').submit();
                   
                    
                }else{
                    alert('Your Enter OTP is Wrong');
                    $('#first').val('');
                    $('#second').val('');
                    $('#third').val('');
                    $('#fourth').val('');
                }
                
                
            });
        });
        </script>
</body>

</html>