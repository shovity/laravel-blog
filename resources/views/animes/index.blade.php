@extends('layouts.app')
@section('title')
	Animes page
@endsection

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Anime name</h2>
				<img src="{{ asset('img/anime0.jpg') }}" class="img-responsive" alt="Image">
			</div>

			<div class="col-sm-6 col-sm-offset-3">
				<h2>Anime name</h2>
				<img src="{{ asset('img/anime1.jpg') }}" class="img-responsive" alt="Image">
			</div>

			<div class="col-sm-6 col-sm-offset-3">
				<h2>Anime name</h2>
				<img src="{{ asset('img/anime2.jpg') }}" class="img-responsive" alt="Image">
			</div>

			<div class="col-sm-6 col-sm-offset-3">
				<h2>Anime name</h2>
				<img src="{{ asset('img/anime3.jpg') }}" class="img-responsive" alt="Image">
			</div>
		</div>
	</div>
	
@endsection