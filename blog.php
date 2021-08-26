<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale="1">
<style>

* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body{
	background-image:url('blueback.png');
	widht:100%;
  font-family: Arial;
  padding: 20px;
    background-size: cover;

	}
.navbar {
  overflow: hidden;
  height:10%;
  width:100%;
  padding-right:0.5%;
   margin-top: 20px;
   font-size:100%;
    text-align: center;

  }

.link a {
  float: left;
  font-size: 1vw;
  color: white;
  text-align: center;
  padding: 1% 1%;
  text-decoration: none;
  height:3vw;
  width:10%;
	background-color:#2A0A22;
}
.link a:hover{
	background-color:red;
}


.navbar a:hover{
   background-color:#B40431;
}
.navbar a.active {
  background-color: #B40431;
  color: white;}
  

.dropdown {

  overflow: hidden;
  float:right;
  
}

.signup .login {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  font-family: inherit;
  margin: 0;
  float:right;
}



.dropdown-content {
  display: none;
  position: absolute;
  background-color:#f9f9f9;
   z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding:10px;
  text-decoration: none;
  display: block;
  text-align: left;
  width:95px;
  height:50px;
  background-color:white;
  text-align:center;
}

.dropdown-content a:hover {
  background-color: gray;
}

.dropdown:hover .dropdown-content {
  display: block;

}
button{
	width:95px;
	height:45px;
	margin-right:15px;
	background-color:green;
	color:white;
	opacity:1;
	transition:0.3s;
}
button:hover{
	opacity:0.6;
	
}

.leftcolumn {
	width:70%;
	float:left;
	background:#ddd;
	margin-right:5%;
	}
	
/* Right column */
.rightcolumn {
  float: left;
  width: 20%;
  height:1000px;
   background:#ddd;
	margin-top:5%;
	text-align:center;
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
   background-color: white;
   margin: 20px 20px 20px 20px;

}
	
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
  margin-left: 5%;
  width:90%;
	background:#C8D7C4;
	height:12%;
	float:center;
		text-align:center;
	 padding-left:2%;
}
.post img:hover{
  border: 1px solid #777;
  transform:scale(1.25);}
  
.footer, .card img:hover{
  border: 1px solid #777;
  transform:scale(1.25);}


.post img{
	height:200px;
	width:100%;
	}


 div.footer{
	


	
	}
img.footer2 {
	width:2.5%;
	height:40%;
	border:1px;
	float:center;
	padding-top:1%;
	
	
	}
	
	
	
img.footer2:hover {
	border:2px;
	 transform:scale(1.5);
	}
.footer p{
	 font-size: 0.90vw;
	}  

img.home {
	float:left;
	width:100px;
	height:100px;
	border-radius:100%;
	margin-right:1%;
	}
	
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
 h1{
	font-family:Arial;
	font-size:30px;
	text-align:Center;
	
 }
 .post img{
	height:200px;
	width:50%;
	}
</style>



</head>

				<body>
					<div class="navbar">
							<img class="home" src="home.jpg"><br><br>
							<div class="link">
							<a href="home.php"><img src="homeicon.jpg"  width="15%" height="100%"> Home</a>
								<a href="blog.php" class="active">Blogs</a>
								<a href="aboutus.php">About us</a>
								<a href="contact.php">Contact us</a>
							<div class="dropdown">
							<button class="signup">Sign Up 
							  <i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
							  <a href="staff_sign_up.php">Staff SignUp</a>
							  <a href="client_sign_up.php">Client SignUp</a>
							
							</div>
						  </div> 
						 <div class="dropdown">
							<button class="login">Log In 
							  <i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
							  <a href="staff_login.php"> Staff  Login</a>
							  <a href="login.php">Client Login</a>
							
							</div>
						  </div> 
							</div>
					
					</div>
					
					<div class="row">
						<div class="leftcolumn">

							<div class="card">
								<h1>Whose dance is it anyway? The show that asks you to guess the choreographer </h1>
								<p>Dance Umbrella and CCN-Ballet de Lorraine’s Unknown Pleasures presents five new works anonymously. So, what’s it like to watch a production with no preconceptions?</P>
								
								<img src="image8.jpg" height="10%" width="100%">
								
							



							</div>

							<div class="card">
							<h2>What kind of value judgments and viewing habits do we bring to the theatre when we are watching a new piece of dance? </h2>

							</div>

							<div class="card">
								<p>
								It’s a question posed by Dance Umbrella and CCN-Ballet de Lorraine in their new, joint production, Unknown Pleasures. 
								By presenting an evening of five new works, whose choreography, design, lighting and music all remain anonymous, 
								they are inviting audiences to look at the stage with their senses rinsed clean of all preconceptions – and all PR.
								It’s a bold and engaging experiment, challenging the roles that reputation, context, gender and age play in our evaluation of dance.
								But much as I enjoyed the novelty of the concept (and the freedom of arriving at the theatre without making any advance preparation), 
								I didn’t find that the experience made me a more innocent viewer.<br><br>
								It’s a bold and engaging experiment, challenging the roles that reputation, context, gender and age play in our evaluation of dance.
								But much as I enjoyed the novelty of the concept (and the freedom of arriving at the theatre without making any advance preparation), 
								I didn’t find that the experience made me a more innocent viewer.<br><br>
								The other works are admirably diverse in style. Best of the four is #2,
								a pure minimalist piece for 17 dancers whose elegantly repeating walks, turns and glides accumulate into grids, circles, and progressively mesmeric kaleidoscopic patterns.
								These patterns form and reform with such tantalising rapidity that we cannot see whether the letters printed on the dancers’ 
								T-shirts are meant to make any sense; only at the end do the cast order themselves into a line in which the words “The world is burning but I keep on turning” become clearly legible. The drollery of it, 
								combined with the musicality of the phrasing and the exquisite control of structure, all suggest the imprint of Lucinda Childs – if not the choreographer herself then a talented disciple.
								</P>
							</div>


						</div>
						
						
						
					

				
				

						<div class="rightcolumn">
							<h2>Popular Posts</h2>
								<div class="post">
								
								<a target="_blank" href="img_forest.jpg">
								  <img src="image2.jpg" alt="Episode 7" height="200px" width="100%">
								</a>
								<div>Episode 2</div>
								</div>
								
								<div class="post">
								<a target="_blank" href="img_forest.jpg">
								  <img src="image3.jpg" alt="Episode 7" height="200px" width="100%" >
								</a>
								<div>Episode 3</div>
								</div>
								
								
								<div class="post">
								<a target="_blank" href="img_forest.jpg" >
								  <img src="image4.jpg" alt="Episode 7"  height="200px" width="100%">
								</a>
								<div>Episode 4</div>
								</div>
								
								
								<div class="post">
								<a target="_blank" href="img_forest.jpg">
								  <img src="image5.jpg" alt="Episode 7"  height="200px" width="100%">
								</a>
								<div>Episode 5</div>
								
								</div>
							</div>
						</div>

					</div>
		<div class="footer">
		
					<a href="https://www.facebook.com/" title="https://www.facebook.com/">
					  <img class="footer2" src="facebook.jpg" alt="Facebook">
					</a>
						<a href="https://www.instagram.com/" title="https://www.instragram.com/">
					  <img class="footer2" src="instagram.png" alt="Instagram">
					</a>
					
					<a  href="https://www.twitter.com/" title="https://www.twitter.com/">
					  <img class="footer2" src="twitter.png" alt="Twitter">
					</a>
					
					<a href="https://www.youtube.com/" title="https://www.youtube.com/">
					  <img  class="footer2"src="youtube.png" alt="Youtube">
					</a>
					
					<a  href="https://www.google.com.au/" title="https://www.google.com/">
					  <img  class="footer2" src="google.png" alt="Google">
					</a>
					<a href="https://www.email.com/" title="https://www.email.com/">
					  <img  class="footer2" src="email.png" alt="Email">
					</a>
					<p>Privacy Policy | Terms of Use | Video Audition Terms of Use<br>
			All Audition Dates and Cities Subject to Change | We are Stars ®/© FremantleMedia North America & Simco, Ltd. 2020 | All Rights Reserved. <p>
				
		
	
	</div>
			<script>
function signin() {
   document.getElementById("myForm").style.display = "block";
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
