@extends('layouts.app')
@section('title')
	Master Area
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">

			<div class="alert alert-success fade in">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    <strong>Hi! My Master </strong>Now, the world is your. What's your command?
			  </div>

			<table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Created_at</th>
						<th>LEVEL</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->created_at}}</td>
							<td>{{$user->lvl}}</td>
							<td>
								<a href="{{ route('user.remove', $user->id) }}" class="glyphicon glyphicon-remove text-danger" data-toggle="tooltip" title="Remove user {{$user->name}}"></a>
							</td>
							<td>
								<a href="{{ route('user.edit.form', $user->id) }}" class="glyphicon glyphicon-edit text-primary" data-toggle="tooltip" title="Edit user {{$user->name}}"></a>
							</td>
						</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
