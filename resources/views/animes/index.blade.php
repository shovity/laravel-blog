@extends('layouts.app')
@section('title')
	Animes page
@endsection

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=611579029008726";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-login-button" data-max-rows="1" data-size="icon" data-show-faces="false" data-auto-logout-link="false"></div>

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