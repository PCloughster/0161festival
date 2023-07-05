<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'home')

@section('video')
    <video autoplay muted loop id="bgvideo">
		<source src="images/bgvideo.mp4" type="video/mp4">
	</video>
@endsection

@section('body')
    @parent

@endsection
 
@section('content')
<section>
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="images/festlogo.png" width="100%" height="100%">
					
				</div>
				<div class="col-md-6">
					<div class="container">
						<h1 style="color: #e31c24; font-size: 3rem; text-align: center;" id="countdown"></h1>
						<h1 style="color: white; font-size: 3rem; text-align: center;">09.05.2024 - 12.05.2024</h1>
						<div class="row align-items-center justify-content-center align-center pb-5">
							<a class="btn btn-danger tickets" href="https://www.eventbrite.co.uk/e/0161-festival-2024-9th-12th-may-tickets-633394950347" role="button" style="font-size: 3rem;">GET TICKETS</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<section>
		<div class="container-fluid" style="background-color: #242424">
			<div class="row align-items-center">
				<div class="col-lg-6 pt-3 p-2">
					<h1 style="color: white; font-size: 2em; text-align: center; font-weight: bold;">We support an ethos dedicated to breaking down prejudice, isolation, and boundaries</h1>
                    <p style="color: white; text-align: center;">
                        0161 Festival believes that by nature, there are no fences, walls, barriers we cannot collectively climb to build a better world. 
                        By building upon a foundation of music and cultures, we could bring people together, and give an anthem to each
                        person's personal antifascist montage.
                    </p>
				</div>
				<div class="col-lg-6 p-2">
					<img class="center" src="images/oldlogo.png" width="50%" height="50%">
				</div>
				
			</div>
			<div class="numbers container">
				<div class="row p-2 align-items-top">
					<div class="col-lg-3">
						<h1 class="numbers"><i class="bi numbers bi-speaker"></i> 54 <p class="numbers">Acts</p></h1>
						<p class="nt">Crossing genres and borders</p>
					</div>
					<div class="col-lg-3">
						<h1 class="numbers"><i class="bi numbers bi-calendar4-week"></i> 10 <p class="numbers">Days</p></h1>
						<p class="nt">A celebration of anti-fascism</p>
					</div>
					<div class="col-lg-3">
						<h1 class="numbers"><i class="bi numbers bi-geo-alt"></i> 7 <p class="numbers">Venues</p></h1>
						<p class="nt">From historic sites to modern pubs and venues</p>
					</div>
					<div class="col-lg-3">
						<h1 class="numbers"><i class="bi numbers bi-building"></i> 1 <p class="numbers">City</p></h1>
						<p class="nt">This is Manchester, we do things differently here</p>
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-center p-3">
				<div class="col-xl-4">
						<div class="row align-items-center justify-content-center align-center pb-5">
							<a class="btn btn-danger tickets" href="festival" role="button" style="font-size: 3rem;">See the line-up</a>
						</div>
				</div>
			</div>
</section>

<script>
	var countDownDate = new Date("May 9, 2024 12:00:00").getTime();
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
@endsection