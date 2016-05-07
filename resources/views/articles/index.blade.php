@extends('layouts.app')
@section('title')
Shovity | Articles
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			@foreach ($articles as $a)
				<h2>{!! $a->title !!}</h2>
				<p>{!! substr($a->content, 0, 100).'...' !!}<p>
				<p>{{ $a->created_at }}</p>
				<a href="{{ route('article.show', $a->id) }}" class="href">Read more</a>
			@endforeach
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			{!! $articles->render() !!}
		</div>
	</div>
</div>
@stop