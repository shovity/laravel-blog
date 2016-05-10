@extends('layouts.app')
@section('title')
You got kicked out | {{ $alert }}
@endsection

@section('content')

<div class="container">
	<div class="col-sm-8 col-sm-offset-2">
		

		<div class="alert alert-danger">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>You got kicked!</strong> {{ $alert }}
		</div>

		<img src="{{ url('img/kick.jpg') }}" class="img-rounded img-responsive" alt="Image">
		
	</div>
</div>