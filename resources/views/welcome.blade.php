<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>User Dashboard</title>
<link rel="shortcut icon" href="https://cmkt-image-prd.freetls.fastly.net/0.1.0/ps/7536267/1820/1214/m1/fpnw/wm0/logo-template-v.2-56-.jpg?1578112807&s=999b9f10fa3b98c45fc7c26d7cda7b33" type="image/x-icon">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="{{asset('Assets/UserDashboard/css/dashboard.css')}}"> -->
  

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
  <style>
    
*{ 
    margin: 0 ;
    padding: 0;
    box-sizing: border-box;
} 
.Dashboard{ 
    width: 100%;
    height: 100vh;
    display: flex;
} 
/* User Side Bar  start*/

.UserSideBar{ 
    
    position: absolute;
    width: 230px;
    height: 100vh;
    /* background-color: azure; */
    display: flex;
    display: none;
    z-index: 10;
    backdrop-filter: blur(14px);


} 
.slidebutton{ 
    width: 20px;
    height: 100vh;
    background-color: transparent;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-size: 20px;
    /* line-height: 10px; */
} 
#SideBar { 
    padding-top: 21px;
    width: 230px;
    height: 100vh;
    /* background: #ffffff; */
    /* border-top-right-radius: 8px; */
    box-shadow: 2px -2px 19px 3px #80808069;
} 
#Slogo{ 
    /* display: flex; */
    height: 100px;
    margin-top: 10px;
    font-size: 15px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;

} 
#Slogo img{ 
    height: 100px;
    border-radius: 20px;
    margin: 0 10px;
   
} 
#SideOl {
    margin-top: 20px;
    width: 100%;
    height: 89vh;
    /* background-color: #7ffbff; */
    padding: 10px 0px;


}
#SideOl ol{
    height: 40px;
    margin-top: 10px;
}
#SideOl a{
   
    display: flex;
    text-decoration: none;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    width: 100%;
    padding: 0px 0px 0px 40px;
    color: #ffffff;
    font-weight: bolder;
    box-shadow: 1px;

}
.SideBarSideHead{
    color: #5d5454;
    padding: 4px;
    font-size: 10px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin-top: 10px;
}
#SidebarIn{
    width: 100%;
    display: flex;
    /* justify-content: end; */
    padding-right: 10px;
    padding-left: 255px;
}
#SidebarOut{
    width: 100%;
    display: flex;
    justify-content: end;
    padding-right: 10px;
}
/* User Side Bar  End*/

/* Top Nav Bar Start */
.TopNavBar{
    background-color: #ffffff;
    width: 100%;
    height: 45px;
    margin-left: 3px;
    /* box-shadow: 10px 0px 14px 4px #80808069; */
    box-shadow: 12px -4px 18px 0px white;

}
#UserTopNav{
    width: 100%;
    height: 100%;
    /* background-color: blue; */
    background-color: #0a242b;
    color: white;
    display: flex;
    justify-content: end;
    align-items: center;

}
#UserTopNav .UserLogo{
    width: 150px;
 
    float: right;
    text-decoration: none;
    color: white;

    padding: 5px 10px;
}
.ProfileAttributes{
    background-color: #ffffff;
    position: absolute;
    display: flex;
    flex-direction: column;
    margin-top: 115px;
    margin-right: 3px;
    padding: 5px 33px;
    border-radius: 4px;
    box-shadow: 0px 0px 7px 4px #8080806e;
    display: none;
    z-index: 10;

}
.ProfileAttributes a{
    text-decoration: none;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    width: 100%;
    height: 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: black;
}

/* Top Nav Bar  End*/
/* Content Section Start*/
.ContentSection{
    background-image: url('https://t4.ftcdn.net/jpg/03/88/65/45/360_F_388654597_RJ46YzwmSQ8Jabg3ARtCJ4rkAKBzmvo3.jpg');
    background-position: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    width: 100%;
    height: 100vh;
    background-color: #ffffff;
    z-index: 6;
   
}
.MiddleSection{
    position: absolute;
    width: 500px;
    height: 254px;
    padding: 35px 5px;
    display: flex;
    flex-direction: column;
    text-align: center;
    border-radius: 18px;
    box-shadow: 0px 0px 13px 8px #ffffff;
    backdrop-filter: blur(14px);
    color: #021d35;
    top: 50%;
    right: 50%;
    transform: translate(50%, -50%);

}
.Wmsg{
    line-height: 40px;
    margin: auto;
}
.Wbuttons{
    height: 50px;
}
.MiddleSection a{
    text-decoration: none;
    font-size: 20px;
    padding: 10px 20px;
    margin: 0 6px;
    /* background-color: #838383ed; */
    border-radius: 5px;
    color: #a9ffe4;
    box-shadow: -1px 1px 9px 0px gray;
    backdrop-filter: blur(39px);
    border: 1px solid #000000;
}
.MiddleSection .Wbuttons a:hover {
    background-color: #313239e3;
}
@media screen and (min-width: 601px) and (max-width: 1024px) {
    body {
        font-size: 16px;
    }

    .user-sidebar {
        width: 200px;
    }

    .content-section {
        padding: 20px;
    }
}
</style>
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
                <p>Kamal-Rajputs</p>
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
            <span class="UserLogo" id="UserLogo"><i class="fa-solid fa-circle-user"> </i> Login / Singup</span>
            <span class="ProfileAttributes" id="ProfileAttributes"> 
                <a href="{{route('User.loginPage')}}"><i class="fa-solid fa-circle-user"> </i> &nbsp;&nbsp; Login</a>
                <a href="{{route('User.RegiPage')}}"><i class="fa-solid fa-circle-user"></i> &nbsp;&nbsp; Singup</a>


            </span>

            
        </nav>
        <!-----------------Main Part  Start ------------------------>
        <div class="ContentSection">

            <div class="MiddleSection">
                <div class="Wmsg">
                    <h1>WELCOME TO<br> BLOGING WORLD PLATFORM</h1>
                </div>
                <div class="Wbuttons">
                    <a href="{{route('User.loginPage')}}" style="color:white">Login</a>
                   <a href="{{route('User.RegiPage')}}" style="color:white">Singup</a>
                </div>
                <!-- <form>
                    <input type="text" name="ifsc" placeholder="Enter Your IFSC CODE" id="ifsc">
                </form> -->
            </div>

        </div>
     <!-- -------------- Main Part  End -------------------------->
    </div>
     <!-- top Nav Bar End -->
  
     

    
</div>
 
<script>
// $(document).ready(function(){
//     $('#ifsc').on('keyup',function(){

//         $.ajax({
//             url:"",
//             type=:'POST'
//         })
//     });

// });





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