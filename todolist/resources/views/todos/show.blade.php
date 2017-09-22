@extends('layouts.app')

@section('content')
	<a class="btn btn-default" href="/">Go Back</a>
	<h1>{{ $todo->text }}</h1>
	<strong>Due By:</strong> <div class="label label-danger">{{ $todo->due }}</div>
	<hr>
	<ul class="list-group">
		<li class="list-group-item">{{ $todo->body }}</li>
	</ul>
	<a href="/todo/{{ $todo->id }}/edit" class="btn btn-default">Edit</a>
	{!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
		{{ Form::hidden('_method', 'DELETE') }}
    	{{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
	{!! Form::close() !!}
@endsection