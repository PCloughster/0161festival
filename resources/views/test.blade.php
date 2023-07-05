<!doctype html>
<html>
<div class="fullpage">
<head>
	<video autoplay muted loop id="bgvideo">
		<source src="images/bgvideo.mp4" type="video/mp4">
	</video>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<meta charset="UTF-8">
<title>0161 Festival</title>
</head>
<body>
	<div class="p-3 pb-5">
		<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #131313">
			<div class="container">
					<a href="index.html" class="navbar-brand">
					<img width="100px" height="69px" src="images/0161.png">
					</a>
					<div class="collapse navbar-collapse mx-3"  id="navmenu">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a href="WIP.html" class="nav-link">Music</a>
							</li>
							<li class="nav-item">
								<a href="WIP.html" class="nav-link">Events</a>
							</li>
							<li class="nav-item">
								<a href="WIP.html" class="nav-link">Activism</a>
							</li>
							<li class="nav-item">
								<a href="WIP.html" class="nav-link">Info</a>
							</li>
						</ul>
					</div>
						
					<a class="btn btn-outline-danger tickets" href="https://www.eventbrite.co.uk/e/0161-music-festival-2023-4th-7th-may-tickets-453709767127?aff=ebdsoporgprofile" role="button">Tickets</a>
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
						<span class="navbar-toggler-icon"></span>
					</button>
					</div>
				</div>
		</nav>
	</div>
	<section>
		<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<img src="images/festlogo.png" width="100%" height="100%">
				
			</div>
			<div class="col-md-6">
				<div class="container">
					<h1 style="color: #e31c24; font-size: 3rem; text-align: center;" id="countdown"></h1>
					<h1 style="color: white; font-size: 3rem; text-align: center;">30.04.2023 - 09.05.2023</h1>
					<div class="row align-items-center justify-content-center align-center pb-5">
						<a class="btn btn-danger tickets" href="https://www.eventbrite.co.uk/e/0161-music-festival-2023-4th-7th-may-tickets-453709767127?aff=ebdsoporgprofile" role="button" style="font-size: 3rem;">GET TICKETS</a>
					</div>
				</div>

			</div>

		</div>
	</div>
	</section>
	<section>
		<div class="container" style="background-color: #242424">
			<div class="row align-items-center">
				<div class="col-lg-6 offset-lg-3 p-5">
					<h1 style="color: white; font-size: 3.5em; text-align: center;">LINE-UP</h1>
					<img src="images/lineup.jpg" width="100%" height="100%">
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<br>
		</div>
	</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

<footer class="p-5 text-light text-center" style="background-color: #131313">
	<div class="container-flex align-items-center">
		<div class="row align-items-center">
			<div class="col-md-4">
				<a href="#" class="navbar-brand">
					<img width="50%" src="images/flogo.png">
					<p>©Copyright 0161 Festival 2022 - All Rights Reserved.</p>
				</a>
			</div>
			<div class="col-4 offset-4" style="font-size: 2.5rem; align-content: right;">
				<h1>
					<a href="https://www.youtube.com/channel/UCTbKQdTZoKEE7uTgHQTefOQ" class="link-danger"><i class="bi bi-youtube"></i></a>
					<a href="https://www.facebook.com/0161Festival/" class="link-danger"><i class="bi bi-facebook"></i></a>
					<a href="https://www.instagram.com/0161festivalmanchester/" class="link-danger"><i class="bi bi-instagram"></i></a>
				</h1>
			</div>
		</div>
	</div>
</footer>
</div>
</html>

<style>
	#bgvideo{
		position: fixed;
		right: 0;
		bottom: 0;
		min-width: 100%;
		min-height: 100%;
		z-index: -1;
	}
	body{
		background-image: url("images/bgimage1.jpg");
		background-repeat: no-repeat;
  		background-size: auto;
		background-attachment: fixed;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
	}
	footer{
		background-color: white;
        bottom:0;
        margin-top: auto;
	}
</style>
<script>
	var countDownDate = new Date("April 30, 2023 12:00:00").getTime();
	var x = setInterval(function() {
	  var now = new Date().getTime();
	  var distance = countDownDate - now;
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
	  + minutes + "m " + seconds + "s ";
	  if (distance < 0) {
		clearInterval(x);
		document.getElementById("demo").innerHTML = "EXPIRED";
	  }
	}, 1000);
</script>

