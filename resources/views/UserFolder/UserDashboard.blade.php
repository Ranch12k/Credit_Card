<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>User Dashboard</title>
<link rel="shortcut icon" href="https://cmkt-image-prd.freetls.fastly.net/0.1.0/ps/7536267/1820/1214/m1/fpnw/wm0/logo-template-v.2-56-.jpg?1578112807&s=999b9f10fa3b98c45fc7c26d7cda7b33" type="image/x-icon">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('Assets/UserDashboard/css/dashboard.css')}}">
  

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>

<style>
    .CreditCardSection{
    background: white;
    margin: auto;
    display: flex;
    justify-content: space-around;
    padding: 24px 17%;
    background: transparent;
    margin: auto;
    }
    .CCSOne{
        position: relative;
        width: 522px;
        height: 88%;
        background: white;
        backdrop-filter: blur(99px);
        padding: 0px 30px;
    }
    

    .form-group{
        display: flex;
        flex-direction: column;
        width: 100%;
        padding: 5px 10px;
        margin: 12px 0;
        position: relative;
        
    }
   
    .form-group input{
        width: 100%;
        height: 39px;
        border: 1px solid #999;
        border-radius:5px;
        background:white;
        position:relative;
    }
    .form-group select{
        width: 100%;
        height: 39px;
        border: 1px solid #999;
        border-radius:5px;
        background:white;
        position:relative;
    }
    .form-group label{
        font-size:13px;
        padding: 0px;
        color: steelblue;
        position: absolute;
        top: -4px;
        left: 19px;
        background: white;


    }
    .CfileType{
        display: flex;
        flex-direction: column;
        width: 100%;
        padding: 5px 10px;
    }
    .OccupationType{
        display: flex;
        width: 100%;
        padding: 5px 10px;
    }
    .OccupationType input{
        height:29px;
    }
    .Csubmit{
        width: 116px;
        height: 38px;
        border: 1px solid #fff;
        background: #8cc4f3;
        font-size: 15px;
        float: right;
        margin-right: 14px;
        border-radius: 6px;
        color: #ffffff;
        font-weight: bold;


    }
    .form-group input::placeholder{
        font-size:12px;
        padding:10px;
      
    }
    
   
   .form-group input:focus {
    border: 1px solid blue ;
    }
    .form-group input:focus-visible {
        border: 3px solid #23f1ef;
    }
    .CCSTwo{
        border: 1px solid white;
        position: relative;
        width: 600px;
        height: 60%;
        backdrop-filter: blur(83px);
        padding: 10px 20px;
        border-radius: 12px;
        background:#8cc4f3;
        color:white;
    }
    .CCSTwo h1{
        color:white;
    }
    .CCSTwo p{
        /* color:#e1e1e1; */
        padding-top:17px;
        font-size:18px;
    }
    .CCSTwo ul li{
        /* color:#e1e1e1; */
        list-style-type: none;
        padding:5px 0;
    }
    .TopNavBottom{
        display:flex;
        margin:auto;    
    }
    .TopNavBottomList{
        display:flex;
        margin:auto;
        list-style: none;
        
    }
    .TopNavBottomList li{
        padding:11px 10px;
        font-size:14px;
        color:black;
        height: 40px;
    }
    .topnavIcon{
        color:black;
    }
    #ApplyBtn{
        text-decoration: none;
        color: white;
        background: steelblue;
        padding: 5px 10px;
        font-family: monospace;
        font-weight: bold;
    }
    .invalid-feedback {
    color: red;
    font-size: 0.875rem;
    }

    .valid-feedback {
        color: green;
        font-size: 0.875rem;
    }
    .alert {
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .35rem;
  }
.alert-danger {
    color: #78261f;
    background-color: #fadbd8;
    border-color: #f8ccc8;
  }

@import url('https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400&display=swap');</style>
    
</style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    

</head>
<body>

<div class="Dashboard">
      <!-- Side Bar Start -->
      <div class="UserSideBar" id="UserSideBar">
        <!-- <p class="slidebutton">S<br><br>I<br><br>D<br><br>E<br><br><br><br>B<br><br>A<br><br>B </p> -->
        <div id="SideBar">
            <span id="Slogo">
                <img src="https://clipartcraft.com/images/transparent-logo-vector-8.png"
                 alt="">
                <p>Kamal-Rajput</p>
            </span>
            <nav id="SideOl">
                <!-- <span class="SideBarSideHead">BASICS</span> -->
                 <hr  style="width:5%;height: 0px; margin: auto; margin:10px;">
                <ol>
                    <a href="Home"><i class="fa-solid fa-house">  Home</i></a>
                </ol>
                
                <!-- <span class="SideBarSideHead">DETAILS</span> -->
                <hr style="width:5%;height: 0px; margin: auto; margin:10px;">

                <ol>
                    <a href="Portfolio"><i class="fa-solid fa-user-tie">  Portfolio</i></a>
                </ol>

                <ol>
                    <a href="Blogs"><i class="fa-solid fa-blog">  Blogs</i></a>
                </ol>
                <!-- <span class="SideBarSideHead">ABOUT</span> -->
                <hr style="width:5%;height: 0px; margin: auto; margin:10px;">


                <ol>
                    <a href="About"><i class="fa-regular fa-circle-question">  About</i></a>
                </ol>
                <ol>
                    <a href="Contact"><i class="fa-solid fa-circle-user">  Contact</i></a>
                </ol>
                <hr style="width:5%;height: 0px; margin: auto; margin:10px;">

                <span id="Slogo" style="background-color: #ffffff96;backdrop-filter: blur(20px); width: 80%;margin:20px auto;">
                   
                    <p style="padding: 10px;">Options</p>
                    <p style="padding: 10px;">Options</p>
                    <p style="padding: 10px;">Options</p>
                </span>
            </nav>
        </div>
        
    </div>
    <!-- Side Bar End -->
     <!-- top Nav Bar Start -->
    <div class="TopNavBar">
        <nav id="UserTopNav">
            <span id="SidebarIn">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>

            </span>
            <!-- <span class="CompanyLogo"> </span> -->
            <span class="UserLogo" id="UserLogo"><i class="fa-solid fa-circle-user"> </i> {{Auth::user()->name}}</span>
            <span class="ProfileAttributes" id="ProfileAttributes"> 
                <a href=""><i class="fa-solid fa-circle-user"> </i> &nbsp;&nbsp; Profile</a>
                <a href="{{route('User.logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i> &nbsp;&nbsp; Logout</a>
            </span>
            
        </nav>
        <nav id="UserTopNav TopNavBottom" class="TopNavBottom" style="background:white;color:black;">
                 <ol class='TopNavBottomList'>
                    <li><a href="Home"><i class="fa-solid fa-house topnavIcon"> &nbsp;&nbsp; Home</i></a></li>
                    <li><a href="{{route('User.CreditCardStaus')}}"><i class="fa-solid fa-user-tie topnavIcon"> &nbsp;&nbsp; Status</i></a></li>
                    <!-- <li><a href="Blogs"><i class="fa-solid fa-blog topnavIcon"> &nbsp;&nbsp; Blogs</i></a></li>
                    <li><a href="About"><i class="fa-regular fa-circle-question topnavIcon"> &nbsp;&nbsp; About</i></a></li> -->
                    <li><a href="" id="ApplyBtn">APPLY</a></li>
                </ol>
           
            
        </nav>
        <!-----------------Main Part  Start ------------------------>
        <div class="ContentSection">

            <div class="CreditCardSection" >

                <div class="CCSOne">

                    <form method="POST" action="{{route('SubmitCreditCardForm')}}" enctype="multipart/form-data"> 
                       @csrf

                        <h2 style="padding:10px;padding-left:15px;margin-top:10px;">CREDIT CARD APPLICATION FORM</h2>
                        
                        <!-- Name Field -->
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Enter name"  required>
                            <label for="exampleInputName">Full Name</label>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email"  required>
                            <label for="exampleInputEmail1">Your Mail</label>
                        </div>

                        <!-- Phone Field -->
                        <div class="form-group mb-3">
                            <input type="tel" class="form-control" id="exampleInputPhone" name="phone" placeholder="Enter phone"  required>
                            <label for="exampleInputPhone">Phone Number</label>
                        </div>
                        <!-- Father's Name Field -->
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="exampleInputFather" name="fname" placeholder="Enter Father's Name"  required>
                            <label for="exampleInputFather">Father's Name</label>
                        </div>
                        <!-- Address Field -->
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="exampleInputAddress" name="address" placeholder="Enter phone"  required>
                            <label for="exampleInputAddress"> Address</label>
                        </div>
                        <!-- State Field -->
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="exampleInputState" name="state" placeholder="Enter State"  required>
                            <label for="exampleInputState">  State</label>
                        </div>
                        <!-- City Field -->
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="exampleInputState" name="city" placeholder="Enter City"  required>
                            <label for="exampleInputCity">Enter City</label>
                        </div>
                        <!-- Pincode Field -->
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="exampleInputSPincode" name="pincode" placeholder="Enter Pincode"  required>
                            <label for="exampleInputPincode">Enter Pincode</label>
                        </div>
                        <!-- Occupation Field -->
                        <div class="form-group">
                        <select name="occupation" id="">
                            <option value="">Select Your Occupation</option>
                            <option value="Accountant">Accountant </option>
                            <option value="Layer">Layer </option>
                            <option value="Driver">Driver </option>
                        </select>
                        <label for="exampleInputOccupation">Enter Occupation type  </label>
                        </div>
                        <!-- PanCard Field -->
                        <div class="form-group">
                            <input type="file" class="form-control" id="Pancard" name="pancard" placeholder="Upload PanCard"  required>
                            <label for="file">Upload PanCard </label>
                        </div>
                         <!-- AadharCard Number -->
                         <div class="form-group">
                            <input type="number" class="form-control" id="exampleInputAadharCardNumber" name="aadharnumber" placeholder=" Aadhar Card Number" maxlength="14"  required>
                            <label for="exampleInputAadharCardNumber">Aadhar Number</label>
                        </div>
                        <!-- AadharCard Field -->
                        <div class="form-group">
                            <input type="file" class="form-control" id="exampleInputSAadharCard" name="aadharcard" placeholder="Upload Aadhar Card"  required>
                            <label for="exampleInputAadharCard">Upload Aadhar Card</label>
                        </div>
                    

                        <!-- Submit Button -->
                        <div class="Csubmit" style="background:transparent;">
                            <button type="submit" class="btn btn-primary Csubmit">Submit</button>
                        </div>
                        
                    </form>

                </div>
                <div class="CCSTwo">
                        <h1>BENEFITS OF CREDIT CARD</h1>
                        <p>
                        As a financial tool, credit cards are often misunderstood and underutilized. Many of us view credit cards simply as a way to make purchases, but they offer so much more than that.
                        Responsible users stand to gain significantly from credit cards, provided they know how to tap into all of the offers and benefits that are up for grabs.

                            First, it is important to understand what credit cards are and how they work. 
                            Simply put, a credit card allows you to borrow money from a bank or credit card company to make purchases.
                            In exchange, you’ll be required to pay interest on the money you borrow beyond a certain period, along with a processing fee or other charges. 
                        </p>
                        <p>
                        <ul>
                        
                        <li> <i class="fa-solid fa-share"></i> &nbsp; Building your credit score with responsible credit card use ...</li>
                        <li> <i class="fa-solid fa-share"></i> &nbsp; Earning rewards for your spending with credit card rewards programs ...</li>
                        <li> <i class="fa-solid fa-share"></i> &nbsp; Protecting against fraud ...
                        <li> <i class="fa-solid fa-share"></i> &nbsp; Enjoying peace of mind with credit card purchase protection and insurance ...</li>
                        <li> <i class="fa-solid fa-share"></i> &nbsp; Extending your warranty coverage ...</li>
                        <li> <i class="fa-solid fa-share"></i> &nbsp; Unlocking valuable travel benefits ...</li>
                        <li> <i class="fa-solid fa-share"></i> &nbsp; Getting emergency assistance when you need it ...</li>
                        <li> <i class="fa-solid fa-share"></i> &nbsp; Managing your budget more effectively ...</li>

                        </ul>
                        </p>
                </div>
                
              
            </div>

        </div>
     <!-- -------------- Main Part  End -------------------------->
    </div>
     <!-- top Nav Bar End -->
  
     

    
</div>
 
<script>


$(document).ready(function(){
    $("#SidebarIn").click(function() {
  $( "#UserSideBar" ).toggle( "slide" );
});
    
});


$(document).ready(function(){
    $("#UserLogo").click(function(){
        $("#ProfileAttributes").toggle();
    });
    
});


$("#files").change(function() {
  filename = this.files[0].name;
  console.log(filename);
});


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
            fname: {
                required: true,
                minlength: 3
            },
            address: {
                required: true,
                minlength: 5
            },
            state: {
                required: true,
                minlength: 2
            },
            city: {
                required: true,
                minlength: 2
            },
            pincode: {
                required: true,
                minlength: 6,
                maxlength: 6,
                digits: true
            },
            occupation: {
                required: true
            },
            pancard: {
                required: true,
                extension: "jpg|jpeg|png|pdf"
            },
            aadharnumber: {
                required: true,
                minlength: 12,
                maxlength: 12,
                digits: true
            },
            aadharcard: {
                required: true,
                extension: "jpg|jpeg|png|pdf"
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
            fname: {
                required: "Please enter your father's name.",
                minlength: "Father's name should be at least 3 characters long."
            },
            address: {
                required: "Please enter your address.",
                minlength: "Address should be at least 5 characters long."
            },
            state: {
                required: "Please enter your state.",
                minlength: "State name should be at least 2 characters long."
            },
            city: {
                required: "Please enter your city.",
                minlength: "City name should be at least 2 characters long."
            },
            pincode: {
                required: "Please enter your pincode.",
                minlength: "Pincode should be exactly 6 digits.",
                maxlength: "Pincode should be exactly 6 digits.",
                digits: "Please enter a valid pincode."
            },
            occupation: {
                required: "Please select your occupation."
            },
            pancard: {
                required: "Please upload your PanCard.",
                extension: "Allowed file types are jpg, jpeg, png, pdf."
            },
            aadharnumber: {
                required: "Please enter your Aadhar number.",
                minlength: "Aadhar number should be exactly 12 digits.",
                maxlength: "Aadhar number should be exactly 12 digits.",
                digits: "Please enter a valid Aadhar number."
            },
            aadharcard: {
                required: "Please upload your Aadhar card.",
                extension: "Allowed file types are jpg, jpeg, png, pdf."
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