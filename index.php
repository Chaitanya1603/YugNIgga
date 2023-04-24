<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="yugnirdharak.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>YUGNIRDHARAK</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="YUGNIRDHARAK-removebg-preview.png" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			<div class="srch"><input typearted="text" class="search" placeholder="Search here..."><img src="images/icon/search.png" alt="search" onclick=slide()></div>
			<a class="get-started" href="login.php">Get Started</a>
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>The beautiful thing about learning is that nobody can take it away from you</p>
				<h5>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research!</h5>
			</div>
			<div class="svg-image">
				<img src="YUGNIRDHARAK.png" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="yugnirdharak.png" alt="Username">
				<p>roshank9419</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div>
	</header>

<!-- Some Popular Subjects -->
	<div class="title">
		<span>Popular Subjects on YUGNIRDHARAK</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href="subjects/jee.html"><img src="images/courses/book.png">MATH</a></div>
		<div class="det"><a href="subjects/gate.html"><img src="images/courses/d1.png">Science</a></div>
		<div class="det"><a href="subjects/jee.html#sample_papers"><img src="images/courses/paper.png">EVS</a></div>
		<div class="det"><a href="subjects/quiz.html"><img src="images/courses/d1.png">Daily Quiz</a></div>
		</div></center>
		<div class="cbox">
		<div class="det"><a href="subjects/computer_courses.html"><img src="images/courses/computer.png">Abacus</a></div>
		<div class="det"><a href="subjects/computer_courses.html#data"><img src="images/courses/data.png">English</a></div>
		<div class="det"><a href="subjects/computer_courses.html#algo"><img src="images/courses/algo.png">GK</a></div>
		<div class="det det-last"><a href="subjects/computer_courses.html#projects"><img src="images/courses/projects.png">Projects</a></div>
		</div>
	</div>
	
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2>What you think about us ?</h2>
					<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research.<br> Educational website can include websites that have games, videos or topic related resources that act as tools to enhance learning and supplement classroom teaching. These websites help make the process of learning entertaining and attractive to the student, especially in today's age. <br>Using HTML(HyperText Markup Language), CSS(Cascading Style Sheet), JavaScript, we can make learning more easier and in a interesting way.</p>
				</div>
		</div>
	</div>



<!-- TEAM -->
	<div class="diffSection" id="team_section">
		<center><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">We're the Creators</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="images/creator/Aryan w.jpg"></center>
				<center><div class="card-title">Aryan Waghmare</div>
				<div id="detail">
					<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating curiosity, he will continue the learning process as long as he lives “</p>
					<div class="duty"></div>
					<a href="https://www.linkedin.com/in/aryan-waghmare-674109230/" target="_blank"><button class="btn-roshan">Follow +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/Chaitanya.jpg"></center>
				<center><div class="card-title">Chaitanya Waghaye</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
					<a href="https://www.linkedin.com/in/chaitanya-waghaye-19b584227/" target="_blank"><button class="btn-akhil">Follow +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/Rishika.jpg"></center>
				<center><div class="card-title">Rishika Deshmukh</div>
				<div id="detail">
					<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating curiosity, he will continue the learning process as long as he lives “</p>
					<div class="duty"></div>
					<a href="https://www.linkedin.com/in/rishika-deshmukh-558a2222a/" target="_blank"><button class="btn-roshan">Follow +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/Tushar.jpg"></center>
				<center><div class="card-title">Tushar Nagrare</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
					<a href="https://www.linkedin.com/in/tushar-nagrare-13880a255/" target="_blank"><button class="btn-akhil">Follow +</button></a>
				</div>
				</center>
			</div>			
			
		</div>
	</div>


<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
		</div>
		<a href="subjects/computer_courses.html"><div class="s-card"><img src="images/icon/computer-courses.png"><p>​Student tracking system to support continuous learning. Improves education’s quality assurance</p></div></a>
		<a href="subjects/jee.html"><div class="s-card"><img src="images/icon/brainbooster.png"><p>​Access to class-wise student enrolment.Individual student lookup via the web.</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/online-tutorials.png"><p>​The student information section of a website includes academic calendar.</p></div></a>
		<a href="subjects/jee.html#sample_papers"><div class="s-card"><img src="images/icon/papers.jpg"><p>It includes various methods such as tests, exams, assignments, projects, portfolios, classroom participation, and self-assessment.</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/p3.png"><p>Communication of assessment results with parents, teachers and stakeholders</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="images/icon/discussion.png"><p>​These services may include academic advising, tutoring, counseling, career services</p></div></a>
	</div>

<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center><p style="font-size: 50px; padding: 100px">Contact Us</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
				<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name <span class="imp">*</span></label><br>
				<center>
				<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
				</center>
				<label>Email <span class="imp">*</span></label><br>
				<input type="email" name="mail" style="width: 100%" required="required"><br>
				<label>Message <span class="imp">*</span></label><br>
				<input type="text" name="message" style="width: 100%" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
			</div>
		</div>
	</div>

<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
		</div>
	</div>

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="yugnirdharak.png" style="width: 200px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2023 Created By Group Number 13 All Rights Reserved.</p>
				<br><p><img src="images/icon/location.png"> Government College of Engineering <br>Nagpur, Maharashtra-440024</p><br>
				<p><img src="images/icon/phone.png"> +91-1234-567-890<br><img src="images/icon/mail.png">&nbsp; yugnirdharak@gmail.com</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>
</body>
</html>