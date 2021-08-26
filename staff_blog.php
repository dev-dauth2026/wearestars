<?php
	include ('server.php');
	
	if (!isset($_SESSION['username'])){
		$_SESSION['msg']= "You must log in first";
		header('location:staff_login.php');
	}
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: staff_login.php');
	}
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
    font-size: 17px;
  border: none;
  float:right;
  
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
button.search{margin-left:0px;
margin-right:20px;
border-radius:0px;
padding-top:0px;
height:40px;
width:50px;
float:right;
background-color:green;}

body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav a:active {
  color: #f1f1f1;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

div.content {

  padding: 60px 16px;
  text-align:centre;
  background-image:url('bodybg.jpg');
  background-size:cover;
 height:auto;
 overflow:hidden;
 color:white;

}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
 .manager{
			align:center;
			border-radius: 100%;
				}
table{
 background-color:gray;
 Padding:30px;
 border-radius:20px;
}





@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
 .manager{
			float:right;
			border-radius: 100%;
				}
.leftcolumn {
	width:70%;
	float:left;
	background:none;
	background-color:none;
	margin-right:5%;
	}
	
/* Right column */
.rightcolumn {
  float: left;
  width: 20%;
  height:auto;
  color:black;
   background:#ddd;
	margin-top:5%;
	text-align:center;
	margin:20px 20px;
	padding-bottom:40px;
 }
.row{
	margin-top:20px;
	margin-bottom:5%;
	}
 
 /* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
  
/* Add a card effect for articles */
.card {
   background-color: none;
   margin: 20px 20px 20px 20px;

}
.post{margin-top:40px;}
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
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}


@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

</style>
</head>
<body>
<div class="header">
	<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="staff_welcome.php">Welcome</a>
  <a class="active" href="staff_profile.php">Profile</a>
  <a href="staff_blog.php">Blogs</a>
  <a href="clientmanagement.php">Client Management</a>
  <a href="staffmanagement.php">Staff Management</a>
  <a href="staff_blog.php?logout='1'">Log Out</a>
</div>	  
				  <div id="main">
 
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Staff Dashboard </span>
  <form action="/action_page.php">
					<button class="search" type="submit"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search.." name="search" >
			
			</form>
</div>
			<div>
			
				
					
				<img class="homelogo" src="homelogo.png" alt="logo" height="200px" width="600px">
				<img class="logo" src="home.png" alt="logo" >
				 
					
				  </div> 
	
				
</div>
<div class="content">
<h1>Blogs</h1>
 <div class="row">
						<div class="leftcolumn">

							<div class="card">
								<h1>WE HAVE CLASSES TO SUIT ALL STYLES AND ALL AGES </h1>
								
								
								<img src="image2.jpg" style="height:500px;width:100%;">
								
							



							</div>

							<div class="card">
							

							</div>

							<div class="card">
								<p>
								If you’re a beginner or more advanced student in dance, music and/or song, then develop and experience a diverse range of skills and styles at the Gold Coast’s leading performing arts school.
								Dynamite Studios Australia’s Young Starz Program is designed to suit performers of all levels, from 2 years to 17 years, and offers a wide range of classes or workshops that students can take after school and on weekends.
								DSA offers dance training in every style from Ready Set Dance Acadmey, Ready Set Ballet, Jazz, Tap, Contemporary, Stretch and Technique, Turns and Leaps, Hip Hop, and RAD Classical Ballet,
								to performing arts training in Singing, Acrobatics, Circus Arts and Musical Theatre.</P>
								<br>
								<h1>READY SET DANCE</h2>
Ready Set Dance as seen on Nick Jr, is a one hour Ready Set Dance combo class of Jazz, Tap, Hip Hop, Singing and Music and a whole lot of fun! The program is specially designed by industry professionals and caters for two levels of 2-3 years and 4-5 years. 
Led by experienced, qualified, inspiring and nurturing trainers, these dance classes for preschoolers are Australia’s most enriching introduction to the performing arts.
 This program has been specially designed to support children to develop the three C’s - Coordination, Creativity and Confidence whilst exploring all aspects of dance through a playful approach which is responsive to the curiosity and imagination of young learners.</p>
								
							</div>


						</div>
						
						
						
					

				
				

						<div class="rightcolumn">
							<h2>Popular Posts</h2>
								<div class="post">
								
								<a target="_blank" href="img_forest.jpg">
								 The Winner of this week
								</a>
							
								</div>
								
								<div class="post">
								<a target="_blank" href="img_forest.jpg">
								 The Best Group Dancer
								</a>
								
								</div>
								
								
								<div class="post">
								<a target="_blank" href="img_forest.jpg" >
								  The Most Comedian of The Week
								</a>
								
								</div>
								
								
								<div class="post">
								<a target="_blank" href="img_forest.jpg">
								 The Most Watched Videos
								</a>
							
								
								</div>
							</div>
						</div>
		</div>
		

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
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>






</body>
</html>
