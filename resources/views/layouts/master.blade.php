<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>
		@yield('head.title')
	</title>

	<!-- include css -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
	<link rel="stylesheet" href="/css/app.css">

	<style type="text/css">
		@yield('head.css')
	</style>

</head>

<body>

	<!-- nav bar -->
	@include ('partials.navbar')

	<!-- Bao loi input -->
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<!-- Bao loi input -->
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input. <br><br>
						<ul>
							@foreach ($errors->all() as $e)
								<li>{{ $e }}</li>
							@endforeach
						</ul>
					</div>
				@endif		
			</div>
		</div>
	</div>



	<!-- content -->
	<div class="container" id="content">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">	
				@yield('body.content')
			</div>
		</div>
	</div>

	<!-- footer -->
	@include ('partials.footer')


	<!--include script -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/sweetalert.min.js"></script>
	<script src="/js/app.js"></script>
	@yield('body.js')
	<!-- Bao loi input -->
    @if (count($errors) > 0)
        <script type="text/javascript">
            var t = "@foreach($errors->all() as $e){{ $e }}<br> @endforeach";
            swal("Whoops!", t, "error");
        </script>
    @endif
</body>
</html>