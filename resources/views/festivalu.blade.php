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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <section>
        <div class="container" style="background-color: #242424">
            <div class="row align-items-center">
				<div class="col-lg-6 offset-lg-3 p-5">
					<h1 style="color: white; font-size: 2em; text-align: center;" class="pb-3">
                        We're still yet to announce the lineup for 2024
                    </h1>
                    <div class="row align-items-center justify-content-center align-center pb-5">
                        <a class="btn btn-danger tickets px-4" href="/festival23" role="button" style="font-size: 2rem;">See last year's lineup</a>
                    </div>
                </div>
			</div>
        </div>
    </section>

@endsection