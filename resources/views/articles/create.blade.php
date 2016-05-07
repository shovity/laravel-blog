@extends('layouts.app')
@section('title')
Create new articles
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2>Create new articles</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">

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
@endsection