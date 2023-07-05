<!-- resources/views/layouts/app.blade.php -->
 
<html>
<head>
    @section('video')
    @show
    <link rel="icon" type="image/x-icon" src="images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/app.css" >
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>0161Fest - @yield('title', '0161 Festival')</title>
</head>
    <body>
    <div class="p-3">
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #131313">
			<div class="container-fluid px-5">
					<a href="/" class="navbar-brand">
					<img width="100px" height="69px" src="images/0161.png">
					</a>
					<div class="collapse navbar-collapse mx-3"  id="navmenu">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a href="festival" class="nav-link">Festival</a>
							</li>
							<!-- <li class="nav-item">
								<a href="WIP" class="nav-link">Other Events</a>
							</li>
							<li class="nav-item">
								<a href="WIP" class="nav-link">News</a>
							</li>
							<li class="nav-item">
								<a href="WIP" class="nav-link">Info</a>
							</li> -->
						</ul>
					</div>
						
					<a class="btn btn-outline-danger tickets" href="https://www.eventbrite.co.uk/e/0161-festival-2024-9th-12th-may-tickets-633394950347" role="button">Tickets</a>
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
						<span class="navbar-toggler-icon"></span>
					</button>
					</div>
				</div>
		</nav>
	    </div>
        @section('body')
        @show
 
        <div class="container-fluid px-5">
            @yield('content')
        </div>
    </body>
    <section>
		<div class="container">
			<br>
		</div>
    </section>
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
</html>