<?php
session_start();
if(!$_SESSION["a"]){
	$a = rand(1,50);
	$b = rand(1,50);
	
	$_SESSION["a"] = $a;
	$_SESSION["b"] = $b;
}

$email = '';
$message = '';
$name ='';
$phone ='';
$result = '';
$error = '';

if(isset($_POST['submit'])){
   //echo'<h1>Submit Clicked!!!'.$_POST['submit'].'</h1>';
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$check = intval($_POST['secCheck']);
	
	if(!$_POST['name']){$error .='Please enter your name! <br>';}
	if(!$_POST['phone']){$error .='Please enter your phone number! <br>';}
	if(!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ $error .= 'Please enter your email! <br>'; }
	if(!$_POST['message']){$error .='Please enter a message! <br>';}
	if($check !==($_SESSION["a"]+$_SESSION["b"])){$error .='Wrong AntiSpam value <br>';}

if($error == ''){
    $from = 'webmaster@rsbwebdesign.com';
    $to =   'robertb1982@yahoo.com'; // email that you want to receive the email to. YOUR ADDRESS
    $subject = 'Message from RSBWebDesign.com Contact Form';
    $body = "<p><b>From:</b> $name</p> <p><b>Email:</b> $email</p><p><b>Email:</b> $phone</p> \n <p><b>Message:</b> \n $message</p>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <'.$from.'>' . "\r\n";  
    if(mail($to,$subject,$body,$headers)){
     $result = '<div class="alert alert-success">Your mail has been sent!</div>';  
        }else{
     $result = '<div class="alert alert-success">Something went wrong. Please try again!</div>';    
        }
    $email = '';
    $message = '';
    $name ='';
    
    // Send email
} else {
    $result = '<div class="alert alert-danger">Error Found:<br>'.$error.'</div>';
}
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact | RSB Web Design</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="img/rsb-favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/rsb-favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/contact-me.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129524654-1"></script>
	<script>
 		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'UA-129524654-1');
	</script>
	<style>
<style>
    .invalid-feedback {
        padding: 0 22% 2%;
        color: #000000;
    }
</style>
</head>

<body>
<header>
	<div class="container">
		<a href="index.html" id="logo">RSB Web Design</a>
			<nav id="main-nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="skills.html">Skills</a></li>
					<li><a href="recent-work.html">My Recent Work</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
	</div>

	<span class="open-slide">
		<a href="#" onclick="openSlideMenu()"><img src="img/hamburger-icon.png"></a>
	</span>

	<div id="side-menu" class="side-nav">
		<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
		<a href="index.html">Home</a>
		<a href="about.html">About</a>
		<a href="skills.html">Skills</a>
		<a href="recent-work.html">My Recent Work</a>
		<a href="contact.html">Contact</a>
	</div>
</header>
	<section class="landing" id="main">
		<div class="landing-inner">
			<h1 class="title">Contact Me</h1>
			<p>Reach out and send me a friendly hello.</p>
			<div class="icons">
			<p><a href="https://www.linkedin.com/in/rbenenato" target="_blank"><i class="fab fa-linkedin-in bounce-top"></i></a><a href="https://github.com/robertb1982" target="_blank"><i class="fab fa-github bounce-top"></i></a><a href="https://jsfiddle.net/user/1982robertb/fiddles/" target="_blank"><i class="fab fa-jsfiddle bounce-top"></i></a><a href="mailto:robertb1982@yahoo.com" class="scrolloff" target="_blank"><i class="fas fa-envelope bounce-top"></i></a></p>
		    </div>
		</div>
	</section>
	<section class="container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94789.95458701559!2d-71.3037259297482!3d42.06063065757742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e462df88828929%3A0xb2bc875508d868b3!2sFoxborough%2C+MA!5e0!3m2!1sen!2sus!4v1559691588069!5m2!1sen!2sus" class="scrolloff" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="row">
			<div class="col-4 center">
				<img alt="profile" src="img/bob-pic.jpg" style="max-width: 100px;border-radius: 50%;border: 2px solid white;">
				<div class="details"><a href="mailto:info@jonny.me" class="details-small">Contact Me</a></div>
			</div>
			<div class="col-8 contact" data-aos="fade-left" data-aos-duration="800">
				<form action="mailer.php" id="contact-form" method="post" action="contact.php" name="contact-form" novalidate>
					<div class="buffer-bottom">
						<input type="text" name="name" placeholder="Name" class="form-control" id="field1" required>
						<p class="invalid-feedback">Please enter your name.</p>
						<input type="email" name="email" placeholder="Email" class="form-control" required>
						<p class="invalid-feedback">Please enter your email.</p>
						<input type="text" name="phone" placeholder="Phone" class="form-control" required>
						<p class="invalid-feedback">Please enter your phone number.</p>
					</div>
					<div class="buffer-bottom">
						<textarea class="message" name="message" placeholder="Message" class="form-control" required rows="6"></textarea>
						<p class="invalid-feedback">Please enter your message.</p>
					</div>
					<span id="submit-response"></span>
					<div class="pull-right">
						<input type="submit" class="button" value="send">
					</div>
					    <label>
							<?php echo $result; ?>
						</label>
				</form>
			</div>
		</div>
  	</section>
	<script>

$('.invalid-feedback').hide();
$('#contact-form').on('submit', function(e) {
  $('.form-control').each(function() {
    if ($(this).is(':invalid')) {
      e.preventDefault();
      $(this).next('.invalid-feedback').show();
    } else {
      $(this).next('.invalid-feedback').hide();
    }
  });
});

$("#name").on("change paste keyup", function() {
  if($(this).val()){
 $(this).next('.invalid-feedback').hide();
} 
});

$("textarea").on("change paste keyup", function() {
  if($(this).val()){
 $(this).parent().find(".invalid-feedback").hide();
} 
});

</script>
<footer class="mast mast-dark">
	<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="75" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
      <path d="M0 0 L50 100 L100 0 Z" fill="white" stroke="white"></path>
    </svg>
			<div class="container">
				<h3 class="h2"  data-aos="fade-down">Thanks for stopping by!</h3>
				<p class="text-xxl">Want to chat about something?</p>
				<a href="mailto:robertb1982@yahoo.com" class="contact-toggle btn btn-lg btn-border push-bottom"><span aria-hidden="true" class="icon-mail"></span> Contact Me</a>
				
		    <div class="icons">
			<p><a href="https://www.linkedin.com/in/rbenenato" target="_blank"><i class="fab fa-linkedin-in bounce-top"></i></a><a href="https://github.com/robertb1982" target="_blank"><i class="fab fa-github bounce-top"></i></a><a href="https://jsfiddle.net/user/1982robertb/fiddles/" target="_blank"><i class="fab fa-jsfiddle bounce-top"></i></a><a href="mailto:robertb1982@yahoo.com" target="_blank"><i class="fas fa-envelope bounce-top"></i></a></p>
		    </div>
			</div>
</footer>
<script>

function openSlideMenu() {
	document.getElementById('side-menu').style.width='250px';
	document.getElementById('main').style.marginRight='250px';
}

function closeSlideMenu() {
	document.getElementById('side-menu').style.width='0';
	document.getElementById('main').style.marginRight='0';
}

</script>
<script>

  $(".title").hide(0).delay(500).fadeIn(3000);

</script>
<script>
  AOS.init();
</script>
</body>
</html>