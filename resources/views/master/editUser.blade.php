@extends('layouts.app')
@section("title")
	Edit user page
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Update user <strong class="text-primary">{{ $user->name }}</strong></h2>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				{!! Form::model($user, [
					'route'		=> ['user.edit', $user->id],
					'method'	=> 'PUT',
					'class' => 'form-horizontal'
					]) !!}

					<div class="form-group">
					    {!! Form::label('id', 'ID', [ 'class' => 'control-label' ]) !!}
					    {!! Form::number('id', null, [ 'id' => 'id', 'class' => 'form-control', 'required' => 'true' ]) !!}
					</div>

					<div class="form-group">
					    {!! Form::label('name', 'Name', [ 'class' => 'control-label' ]) !!}
					    {!! Form::text('name', null, [ 'id' => 'name', 'class' => 'form-control', 'required' => 'true' ]) !!}
					</div>

					<div class="form-group">
					    {!! Form::label('email', 'Email', [ 'class' => 'control-label' ]) !!}
					    {!! Form::text('email', null, [ 'id' => 'email', 'class' => 'form-control', 'required' => 'true' ]) !!}
					</div>

					<div class="form-group">
					    {!! Form::label('created_at', 'Created_at', [ 'class' => 'control-label' ]) !!}
					    {!! Form::text('created_at', null, [ 'id' => 'created_at', 'class' => 'form-control', 'required' => 'true' ]) !!}
					</div>

					<div class="form-group">
					    {!! Form::label('level', 'level', [ 'class' => 'control-label' ]) !!}
					    {!! Form::number('level', null, [ 'id' => 'level', 'class' => 'form-control', 'required' => 'true' ]) !!}
					</div>

					<div class="form-group">
					    <button class="btn btn-success">Update <span class="glyphicon glyphicon-refresh"></span></button>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection