@extends('layouts.app')
@section('title')
Create new articles
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2>Edit articles</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">

			{!! Form::model($article, [
                    'route' => [ 'article.update', $article->id ],
                    'method' => 'PUT',
                    'class' => 'form-horizontal'
                ])
            !!}

                @include('articles._form', [ 'btn_name' => 'Update' ])

            {!! Form::close() !!}

		</div>
	</div> <!-- .row -->
</div>
@endsection