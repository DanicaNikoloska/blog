<br>
@foreach($errors->all() as $error)
	
	<div class="alert alert-danger">
		
		{{ $error }}

	</div>

@endforeach

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif