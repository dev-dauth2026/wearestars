<?php
include ('server.php')
?>
<!DOCTYPEE html>
<html>
<head>
<title> Website image gallery
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

*{
  margin:0;
  padding:0;
	box-sizing:border-box;	
}
body{
font-family: Arial, Helvetica, sans-serif;
	background-color:white;
	background-size: cover;
	  	  margin:0;
	}
	
.header{
	width:100%;
	background-image:url('homebg.jpg');	
	background-size:cover;
	margin-bottom:2rem;	
	padding:5px;
	}

.main_header .logo{
	width:200px;
	height:200px;
	float:left;
	margin-left:5%;
	border-radius:100%;
}
nav .nav_div a{
  text-decoration:none;
  color:white;
}



.footer{background-color:#2E2E2E;
color:white;
text-align:center;
padding-top:20px;
padding-bottom:20px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #DF013A;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}



.fa-yahoo {
  background: #430297;
  color: white;
}



.responsive {
  padding: 15px 15px 15px 15px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
   
  }
}

	
</style>
</head>
<body>
<div class="header">
    <!-- Main Header  -->
    <div class="main_header">
    <img class="homelogo" src="homelogo.png" alt="logo" height="200px" width="600px">
    <img class="logo" src="home.png" alt="logo" >
    </div>
    <!-- Main header end  -->
			<!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Log In</h4>
            <div class="middle" style="height:60px;float:left;margin-left:80px;">
              <button class="middle" ><a href ="login.php" style="color:white;">Client Login </a></button>
              <button class="middle" ><a href ="staff_login.php" style="color:white;">Staff Login </a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal end  -->
    <!-- Navbar -->
      <div class="navbar">
            <a href="home.php" class="active"><img src="homeicon.jpg" width="15px" height="15px" style="position:relative"> Home</a>
            <a href="membership.php">Membership</a>
            <a href="aboutus.php">About us</a>
            <a href="contact.php">Contact us</a>
      </div>  
    	
      <nav class="navbar navbar-expand-lg ">
          <div class="container-fluid nav_div d-flex justify-content-center align-items-center">
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  mb-2 mb-lg-0 d-flex justify-content-center align-items-center">
                <li class="nav-item d-flex justify-content-center ">
                  <a class="nav-link  active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              
            </div>
            <form class="d-flex" action="/action_page.php">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"> </i> Search</button>
              </form>
                <form >
                  <input type="text" placeholder="Search.." name="search">
                  <button class="search" type="submit"></button>
                </form>
                <button class="signup" ><a href="client_sign_up.php" style="color:white">Sign Up </a></button>
                <button type="button" class="login" data-toggle="modal" data-target="#myModal">Log In</button>
          </div>
       </nav>	
    <!-- Navbar end  -->
</div>
<!-- Header end  -->
<!-- Carousel -->
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="image1.jpg"  style="width:100%;">
        </div>

        <div class="item">
          <img src="image2.jpg"  style="width:100%;">
        </div>
      
        <div class="item">
          <img src="image3.jpg"  style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>				
				



<div class="clearfix"></div>
<div class="footer">
	<p><b><u> Help and Support</u></b><br>
	City Hall, 64 Adelaide St, Brisbane City QLD 4000.
	<br>
	Phone:+61 1300 125 194/ +161 73192 9200<br>
	E-mail:<a href="info@wearestars.com">info@wearestars.com</a><br><br>	
	<u><b>CONNECT WITH US:</b></u><br><br>
	<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>
<a href="#" class="fa fa-snapchat-ghost"></a>
<a href="#" class="fa fa-skype"></a>
<a href="#" class="fa fa-yahoo"></a>

	<hr>
	We Are Stars Pty Ltd trading as Talent Show in Australia ABN: 37 168 731 048 | RTO: 41138<br>

 All Rights Reserved © 2020 | Privacy Policy</p>
	
	</div>
		<script>
function signin() {
   document.getElementById("myForm").style.display = "block";
}
function signup() {
   document.getElementById("signupForm").style.display = "block";
}
function stafflogin() {
   window.open("staff_login.php");
}
function clientlogin() {
   window.open("login.php");
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function myFunction1() {
  window.open("client_sign_up.php");
}
</script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>	
	
</body>
</html>