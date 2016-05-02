@extends('layouts.master')
@section('head.title')
Shovity | Articles
@stop

@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			@foreach ($articles as $a)
				<h2>{{ $a->title }}</h2>
				<p>{{ substr($a->content, 0, 100).'...' }}<p><a href="{{ route('article.show', $a->id) }}" class="href">Read more</a></p>
			@endforeach
		</div>

		<div class="col-sm-6 col-sm-offset-3">
			{!! $articles->render() !!}
		</div>

	</div>
</div>
@stop