<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/works.css">
		<link rel="stylesheet" href="css/projects.css">
		<link rel="stylesheet" href="css/download.css">
		<link rel="stylesheet" href="css/contact.css">
		<title>Mathieu Paczesny</title>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<nav>
					<ul>
						<li><a href="#home" id="menuHome">Home</a></li>
						<li><a href="#projects" id="menuProjects">Projects</a></li>
						<li><a href="#download" id="menuDownload">Download</a></li>
						<li><a href="#contact" id="menuContact">Contact</a></li>
					</ul>
				</nav>
			</div>
			<div id="home">
				<h2>Mathieu <div class="colorTitle">P</div>a<div class="colorTitle">cZ</div>esny</h2>
					<div id="defilText">
						<ul>
							<li>have you got projects ? ideas ?</li>
							<li>i offer you my creativity and my skills</li>
							<li>for a site web at your image</li>
						</ul>
					</div>
					<p>Web Designer | Web Developpeur</p>
			</div>
			<div id="projects">
				<div class="categories">
					<h2>Art Work</h2>
					<a href="images/carte1.png"  target="_blank">
						<div class="work">
							<img src="images/carte1.png" alt="Face 1 visiting Card">
						</div>
					</a>
					<a href="images/carte2.png">
						<div class="work">
							<img src="images/carte2.png" alt="Face 2 visiting Card">
						</div>
					</a>
				</div>
				<div class="categories">
					<h2>Web site</h2>
					<a href="http://mathieupaczesny.com"  target="_blank">
						<div class="work">
							<img src="images/onepage.png" alt="one page">
						</div>
					</a>
				</div>
			</div>
			<div id="download">
				<div id="titreDownload"><h3>M1104P Mme Gattolin</h3></div>
				<a href="files/CarteVisiteMathieuPaczesny.pdf" target="_blank">Tp : carte de visite</a>
				<div id="titreDownload"><h3>Projets personnel</h3></div>
				<a href="https://github.com/MathieuPcz/OnePage" target="_blank">Site personnel (one page)</a>
				<a href="https://github.com/MathieuPcz/SiteIut" target="_blank">Site IUT MMi</a>


			</div>
			<div id="contact">
				<h1>Contact</h1>
					<div id="contactText">
						<i>Have you got a project ? ideas ? i offer you my creativity and my experience !</i>
						<p>Do not hesitate to contact me personally to discuss this and to share information that could be of benefit to all !</p>
						<p>By phone : 06 59 48 39 29 or by email by completing the form below</p>
					</div>
					<form>
						<div id="premierblock">
						<input type="text" placeholder="Your name" id="name">
						<input type="text" placeholder="Your first name" id="firstName">
						</div>
						<div id="secondblock">
						<input type="text" placeholder="State the topic" id="objet">
						<input type="email" placeholder="Your email" id="email">
						</div>
						<textarea name="description" id="text" cols="30" rows="10" placeholder="Your text"></textarea>
						<button type="button" id="envoyer">Send</button>
						<div id="infoForm"></div>
					</form>
				</div>
			</div>
		</div>
		
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/sendMail.js"></script>
	<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			/*scroll et paralax*/

			$.localScroll();
			
			/*mesure largeur et hauteur fenetre*/
			var widthWindow = $(window).width();
			var heightWindow = $(window).height();

			$('body').css('width',widthWindow);
			$('body').css('height',heightWindow);
			$('#home').css('height',heightWindow);
			$('#projects').css('height',heightWindow);
			$('#download').css('height',heightWindow);
			$('#contact').css('height',heightWindow);

			/*add class for menu*/
			$('#menuHome').addClass('menuSelect');
			$("#header a").click(function(e) {
			    e.preventDefault();
			    $("#header a").removeClass("menuSelect");
			    $(this).addClass("menuSelect");

		    });

		    /*defilement text*/
			$('#defilText').fadeOut(0).fadeIn(2000);
			$(function(){
		      setInterval(function(){
		         $("#defilText ul").animate({marginTop:-50},1500,function(){
		            $(this).css({marginTop:0}).find("li:last").after($(this).find("li:first"));
		         })
		      }, 4000);
		   });

			
		});
	</script>
	</body>
		
</html>