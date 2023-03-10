<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	include ('./inc/clean_inputs.php');

	include ('./inc/send_to_db.php');

	$mySkills = ["Python", "HTML", "CSS", "PHP", "JavaScript"];

	function newList($array) {
		echo '<ul class="d-inline-block font-weight-light text-left">';
		foreach ($array as $value) {
			echo '<li>' . $value . '</li>';
		}
		echo '</ul>';
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
		<link rel="stylesheet" href="style.css" />
		<link rel="icon" type="image/x-icon" href="/images/logoAN.ico">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

		<title>Aaron Nader Portfolio</title>
	</head>
	<body>
		<!-- JavaScript Animation -->

		<script>
			window.onload = function() 
			{
				// Nav Bar Animation
				const navbar = document.querySelector('.navbar');

				// Set its initial position slightly to the left of its final position
				gsap.set(navbar, { x: -10 });

				// Create the animation
				gsap.to(navbar, 
				{
					duration: 2.5,
					x: 0,
					ease: 'power1.out', // Use an easing function to create a smooth effect
					repeat: -1, // Make the animation repeat indefinitely
					yoyo: true, // Make the animation "bounce" back and forth
				});

				// Aaron Naders Logo Fade In
				const logo = document.querySelector('.mx-auto.d-block img');

				// Set its initial properties
				gsap.set(logo, 
				{
					opacity: 0,
					scale: 0.5,
				});

				// Create the animation
				gsap.to(logo, 
				{
					duration: 1.5,
					opacity: 1,
					scale: 1,
					ease: 'power3.out', // Use an easing function to create a smooth effect
					delay: 0.5, // Delay the animation by 0.5 seconds to create a staggered effect with the nav bar animation
				});
0
				// Anything H1 Attribute will have th esame swaying animation as NavBar

				const h1 = document.querySelector('h1');

				// Set its initial position slightly to the left of its final position
				gsap.set(h1, { x: -10 });

				// Create the animation
				gsap.to(h1, 
				{
					duration: 2.5,
					x: 0,
					ease: 'power1.out', // Use an easing function to create a smooth effect
					repeat: -1, // Make the animation repeat indefinitely
					yoyo: true, // Make the animation "bounce" back and forth
				});

			}
		</script>

		<!-- Navigation Bar -->

		<nav class="navbar navbar-expand-md navbar-dark bg-danger shadow sticky-top">
			<a href="#" class="navbar-brand">
				Aaron Nader
			</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navContent">
				<ul class="navbar-nav">
					<li class="navbar-item"><a class="nav-link" href="#about">About</a></li>
					<li class="navbar-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
					<li class="navbar-item"><a class="nav-link" href="#contact">Contact</a></li>
					<li class="navbar-item"><a class="nav-link" href="download/resume.docx">Download Resume</a></li>
				</ul>
			</div>
		</nav>

		<!-- Header -->
		<header class="mainHeader">
			<div class="container-fluid h-100">
				<div class="row align-items-center justify-content-center text-center text-white h-100" style="background-color: rgba(0, 0, 0, 0.2);">
					<div class="col-lg-8">

						<!-- Logo Image -->

						<div class="mx-auto d-block">
							<img src="images/anLogo.png" alt="Aaron Nader's Logo" class="img-fluid" />
						</div>

						<h1 class="display-1 font-weight-bold text-light">
							Aaron Nader
							<span class="font-weight-bold text-dark">Portfolio</span>
						</h1>

						<hr class="my-4 bg-white" />

						<p class="font-weight-bold mx-5">
						My name is Aaron Nader. My family are my biggest supporters, especially my wife Caroline; We have three kids. I like the outdoors, and living a healthy lifestyle. I always had an interest in computers since I was a little kid. I have 5+ years experience in Web Development, including HTML, CSS, JavaScript, PHP, Python, MySQL & extended libraries such as BootStrap. 
						Excited you're here, you can click button below to learn more!
						</p>
						<a class="btn btn-danger btn-lg mt-3" role="button" href="#about">Find Out More</a>
					</div>
				</div>
			</div>
		</header>

		<!-- About -->
		<section id="about">
			<div class="container">
				<div class="row align-items-center justify-content-center text-center py-5">
					<!-- Headshot Image -->
					<div class="col-6 col-md-4">
						<img src="images/aaronPhoto.jpg" alt="My headshot" class="img-fluid" />
					</div>
					<!-- About Me Summary -->
					<div class="col-md-8 my-3">
						<h2 class="font-weight-bold">Aaron Nader</h2>

						<!-- My Skills List-->
						<p>
                            <span  class="font-weight-bold" style="font-size: 1.1em;">My skills include:</span> 
                            <?php newList($mySkills); ?>
                        </p>
						<a class="btn btn-danger btn-lg mt-3" role="button" href="#contact">Contact Me</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Portfolio -->
		<section id="portfolio" class="bg-secondary">
			<div class="container-fluid py-5">
				<!-- Portfolio Section Title -->
				<div class="row text-white text-center">
					<div class="col">
						<h2 class="display-4 font-weight-bold">Portfolio</h2>
						<hr class="bg-white mb-5" />
					</div>
				</div>

				<!-- Portfolio Items Row Start -->
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
					<!-- Portfolio Item Start -->
					<div class="col mb-4">
						<!-- Card Start -->
						<div class="card bg-light text-center border-light shadow h-100">
							<!-- Optional Card Image -->
							<img src="images/ticTac.png" alt="ticTacGame" class="card-img-top" style="object-fit: cover; height: 15em;" />
							<!-- Card Body -->
							<div class="card-body">
								<h3 class="card-title">Tic Tac Toe</h3>
								<hr class="bg-secondary" />
								<p class="card-text">
									A simple JavaScript Tic Tac Toe Game.
								</p>
							</div>
							<!-- Optional Link -->
							<div class="card-footer">
								<a class="btn btn-outline-danger btn-lg mt-2" role="button" href="http://aaronnader.com/tictactoe/">Click here to Play.</a>
							</div>
						</div>
						<!-- Card End -->
					</div>
					<!-- Portfolio Item End -->

					<!-- Portfolio Item -->
					<div class="col mb-4">
						<!-- Card Start -->
						<div class="card bg-light text-center border-light shadow h-100">
							<!-- Optional Card Image -->
							<img src="images/dayzPhoto.jfif" alt="Art" class="card-img-top" style="object-fit: cover; height: 15em;" />
							<!-- Card Body -->
							<div class="card-body">
								<h3 class="card-title">Project DayZ San Andreas Multiplayer Mod</h3>
								<hr class="bg-secondary" />
								<p class="card-text">
									A Modification created for the San Andreas Multiplayer Mod, GTA bringing an apocalypse open world experience and survival against zombies, looting, etc!
								</p>
							</div>
							<!-- Optional Link -->
							<div class="card-footer">
								<a class="btn btn-outline-danger btn-lg mt-2" role="button" href="https://github.com/AaronNader96/Project-DayZ-SAMP">Visit GitHub & Download</a>
							</div>
						</div>
						<!-- Card End -->
					</div>
					<!-- Portfolio Item End -->

					<!-- Portfolio Item -->
					<div class="col mb-4">
						<!-- Card Start -->
						<div class="card bg-light text-center border-light shadow h-100">
							<!-- Optional Card Image -->
							<img src="images/aiCooking.png" alt="Art" class="card-img-top" style="object-fit: cover; height: 15em;" />
							<!-- Card Body -->
							<div class="card-body">
								<h3 class="card-title">AI Cooking Game</h3>
								<hr class="bg-secondary" />
								<p class="card-text">
									A ChatGPT insipired cooking game using HTML & Javascript. Each response sends a listener to send text-to-voice speech via browser.
								</p>
							</div>
							<!-- Optional Link -->
							<div class="card-footer">
								<a class="btn btn-outline-danger btn-lg mt-2" role="button" href="https://github.com/AaronNader96/AI-Basic-Cooking-Game-JS/blob/main/index.html">Visit GitHub & Download</a>
							</div>
						</div>
						<!-- Card End -->
					</div>
					<!-- Portfolio Item End -->
				</div>
				<!-- Portfolio Items Row End -->
			</div>
		</section>

		<!-- Contact Form Section -->
		<section id="contact">
			<div id="form" class="container py-5">
				<!-- Section Title -->
				<div class="row justify-content-center text-center">
					<div class="col-md-6">
						<h2 class="display-4 font-weight-bold">Contact Me</h2>
						<hr />
					</div>
				</div>
				<!-- Contact Form Row -->
				<div class="row justify-content-center">
					<div class="col-6">
					
						<!-- Contact Form Start -->
						<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . "#contact"); ?> method="POST" novalidate>
							
							<!-- Name Field -->
							<div class="form-group">
								<label for="name">Full Name:</label>
								<span class="text-danger">*<?php echo $nameErr; ?></span>
								<input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="<?php if(isset($name)) {echo $name;}?>"" />							
							</div>
							
							<!-- Email Field -->
							<div class="form-group">
								<label for="email">Email address:</label>
								<span class="text-danger">*<?php echo $emailErr; ?></span>
								<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php if(isset($email)) {echo $email;} ?>" />
							</div>
							
							<!-- Radio Button Field -->
							<div class="form-group">
								<label class="control-label">Can we contact you back?</label>
								<span class="text-danger">*<?php echo $contBackErr; ?></span>
								<div class="form-check">
									<input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes"  <?php if ((isset($contBack)) && ($contBack == "Yes")) {echo "checked";}?>/>
									<label class="form-check-label" for="yes" >Yes</label>
								</div>
								<div class="form-check">
									<input type="radio" class="form-check-input" name="contact-back" id="no" value="No" <?php if ((isset($contBack)) && ($contBack == "No")) {echo "checked";}?>/>
									<label class="form-check-label" for="no" >No</label>
								</div>
							</div>
							
							<!-- Comments Field -->
							<div class="form-group">
								<label for="comments">Comments:</label>
								<textarea id="comments" class="form-control" rows="3" name="comments"><?php if (isset($comment)) {echo $comment;} ?></textarea>
							</div>

							<!-- Required Fields Note-->
							<div class="text-danger text-right">* Indicates required fields</div>
							
							<!-- Submit Button -->
							<button class="btn btn-danger mb-2" type="submit" role="button" name="submit">Submit</button>
						</form>						
					</div>
				</div>
			</div>
			
			<!-- Thank you Modal -->
			<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="thankYouModalLabel">Thank you!</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?php echo $_SESSION['message']; ?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Show thank you message -->
		<?php 
            if ($_SESSION['complete']) {
                echo "<script>$('#thankYouModal').modal('show');</script>";
                session_unset(); 
            };
        ?>

		<!-- Footer -->
		<footer class="py-4 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; Aaron Nader 2022</p>
			</div>
		</footer>

	</body>
</html>
