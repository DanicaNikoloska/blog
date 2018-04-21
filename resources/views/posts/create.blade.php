@extends('layouts.app')

@section('content')

	<div class="container">

     	<div class="row">
        
	        <div class="col-md-8">

	        	<h1 class="my-4">
            
          		</h1>

	        	<h4> Create new post </h3>

	        	<br>

	        	{!! Form::open(['route' => 'posts.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

				    <div class="form-group">
				    	{{ Form::label('title', 'Title') }}
				    	{{ Form::text('title', '', ['class' => 'form-control']) }}
				    </div>
				    <div class="form-group">
				    	{{ Form::label('description', 'Description') }}
				    	{{ Form::textarea('description', '', ['class' => 'form-control', 'rows' => '3']) }}
				    </div>
				    <div class="form-group">
				    	{{ Form::label('image', 'Image') }}
				    	{{ Form::file('image', ['class' => 'form-control-file']) }}
				    </div>
				    {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}

				{!! Form::close() !!}

				@include('inc.messages')

	        </div>

    	</div>

	</div>

@endsection