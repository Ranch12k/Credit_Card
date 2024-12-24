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
                 <hr style="width:5%;height: 0px; margin: auto; margin:10px;">
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
            <span class="UserLogo" id="UserLogo"><i class="fa-solid fa-circle-user"> </i> Kamal Rajput</span>
            <span class="ProfileAttributes" id="ProfileAttributes"> 
                <a href=""><i class="fa-solid fa-circle-user"> </i> &nbsp;&nbsp; Profile</a>
                <a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> &nbsp;&nbsp; Logout</a>
            </span>
            
        </nav>
        <div class="ContentSection">

            <div class="MiddleSection">
                <div class="Wmsg">
                    <h1>WELCOME TO<br> BLOGING WORLD PLATFORM</h1>
                </div>
                <div class="Wbuttons">
                    <a href="Home">Login</a>
                   <a href="#">Singup</a>
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




</script>
 
</body>
</html>