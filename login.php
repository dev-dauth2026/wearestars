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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

*{
	box-sizing:border-box;	
}
body{
font-family: Arial, Helvetica, sans-serif;
	background-color:white;
	widht:100%;
	  background-size: cover;
	  	  margin:0;
	}
	
div.header{
	text-align:left;
	padding-top:0.5vw;
	width:100%;
	background-image:url('homebg.jpg');	
	background-size:cover;
	margin:0;	
	padding-bottom:0;
	}
.header input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  float:right;
  margin-top:20px;
}
img.logo{
	width:200px;
	height:200px;
	float:left;
	margin-left:5%;
	border-radius:100%;
}
img.homelogo{
	margin-left:60px;
}
.navbar {
  overflow: hidden;
  width:100%;
  height:45px;
  padding-bottom:0px;
  margin-bottom:0px;

   
  }

.navbar a {
  float: left;
  font-size: 1vw;
  color: white;
   text-align: center;
  padding: 2px 2px;
  text-decoration: none;
  height:45px;
  width:120px;
  padding-bottom:0px;
  
}

.navbar a:hover{
   background-color:gray;
}

.navbar a.active {
  background-color:gray;
  color: white;
}

.navbar {
  overflow: hidden;
  background-color:none;
  padding-bottom:0px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  padding-bottom:0px;
}

.

.signup .login {
  font-size: 16px;  
    color: white;
   font-family: inherit;
  margin: 0;
  border-radius:40px;
  float:right;
}




button{
	width:95px;
	height:45px;
	margin-top:15px;
	margin-right:15px;
	background-color:green;
	color:white;
	opacity:0.6;
	transition:0.3s;
	  border-radius:40px;
	  float:right;
	  border-size:0px;
	  
}

.signup{
	background-color:#0080FF;
}

.middle{
	margin-bottom:40px;
	margin-top:20px;
	margin-left:50px;
}
.body{background-image:url('bodybg.jpg');
background-image:cover;
padding-left:80px;
padding-right:80px;
color:white;
overflow:hidden;
margin-bottom:0px;
}

.body form{float:center;
	padding:2%;
	}	
/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #0040FF;
  padding: 20px 0 30px 0;
  width:100%;
  content-align:center;
  margin-top:40px;
} 
.container form{
	float:center;
	}
/* style inputs and link buttons */
.col input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none;
  color:black;
  /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: black;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width:100%;

  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
	float:center;
  text-align: center;
  border-radius: 0px 0px 4px 4px;
	margin:10px 10px 10px 10px;
}

.leftcol{
	content-wrap:wrap;
	margin:10px 10px 10px 10px;
	float:center;
	 display: inline-block;
	border-radius: 10px;
	
		}

.rightcol{
	content-wrap:wrap;
	margin:10px 10px 10px 10px;
	float:center;
	 display: inline-block;
	  border-radius: 10px;

	}
	

.footer{background-color:#2E2E2E;
color:white;
text-align:center;
padding-top:20px;
padding-bottom:20px;
margin-top:0;
}
.fa {
 
  font-size: 30px;
  width: 50px;
  height: 50px;
  text-align: center;
  text-decoration: none;
  margin: 2px 2px;
  border-radius:100%;
  padding-top:10px;
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
button.search{margin-left:0px;
margin-top:18px;
border-radius:0px;
padding-top:0px;
height:40px;
width:50px;}

button:hover{
	opacity:1;
	transform:scale(1.05);
	
}
.fa-search:{padding-top:0px;width:10px;height:10px;padding-bottom:10px;}
hr{color:gray;}
.container img {margin-top:0px;}
* {
  box-sizing: border-box;
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



.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 700px) {
  .navbar {
    width: 100%;
    height: auto;
    position: relative;
	overflow:auto;
	padding-bottom:80px;
  }
  .navbar a {float: left;width:100%;}
  
  .navbar img{width:15px;height:15px;position:abosolute;}
  div.dropdown {float:left; width:100%;}
  .signup, .login{float;left;width:100%;margin-top:20px;}
  
</style>
</head>
<body>
		
<div class="header">
			<div>
			
					<button class="signup" ><a href="client_sign_up.php" style="color:white">Sign Up </a></button>
					
					
					<button type="button" class="login" data-toggle="modal" data-target="#myModal">Log In</button>

					  <!-- Modal -->
					  <div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							 
							  <center><h4 class="modal-title">Log In</h4></center>
							  <div class="middle" style="height:60px;float:left;margin-left:80px;">
							   <button class="middle" ><a href ="login.php" style="color:white;">Client Login </a></button>
							  <button class="middle" ><a href ="staff_login.php" style="color:white;">Staff Login </a></button>
							 
							<br><br><br><br>
							
							</div>
							</div>
							
						  </div>
						  
						</div>
					  </div>
					<form action="/action_page.php">
					<button class="search" type="submit"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search.." name="search" >
			
			</form>
				<img class="homelogo" src="homelogo.png" alt="logo" height="200px" width="600px">
				<img class="logo" src="home.png" alt="logo" >
				 
					
				  </div> 
				
					
					  
				  
				
			
		
	<div class="navbar">
			  <a href="home.php" ><img src="homeicon.jpg" width="15px" height="15px" style="position:relative"> Home</a>
			  <a href="membership.php" >Membership</a>
				<a href="aboutus.php" >About us</a>
				 <a href="contact.php" >Contact us</a>
				
				  
			</div>		
</div>

	

		<div class="body">			
			<center>
				<div class="container">
				  <form method="post" action="login.php">
				  <?php include ('errors.php');?>
					<div class="row">
					 <center><h2> Client Login </h2></center>
					  <div class="col">
						<input type="text" name="username" placeholder="Username" required>
						<input type="password" name="password" placeholder="Password" required>
						<input type="submit" value="Login" name="login">
					  </div>
					  
					</div>
				  </form>
				</div>
				<br><br>
		<p align="center" >Don't Have Account?</p>
<div class="bottom-container">
  <div class="row">
    <div class="leftcol">
      <a href="#" style="color:black" class="btn">	 <button  class="signup" onclick="myFunction1()" type="signin" title="Sign up if you don't have account">Sign Up</button></a>
    </div>
    <div class="rightcol">
      <a href="#" class="btn" style="color:white;">Forgot password?</a>
    </div>
  </div>
</div>	</center></div>
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

 All Rights Reserved ?? 2020 | Privacy Policy</p>
	
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
	
	
</body>
</html>
