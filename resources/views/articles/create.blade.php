@extends('layouts.master')
@section('head.title')
Create new articles
@stop

@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2>Create new articles</h2>
		</div>
	</div>

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

			{!! Form::open([
					'route'	=> 'article.store',
					'class'	=> 'form-horizontal',
					'method'	=> 'POST',
				]) !!}
			    
				@include('articles._form', ['btn_name' => 'Create'])
				
			{!! Form::close() !!}

		</div>
	</div> <!-- .row -->
</div>
@stop