@extends('admin.layout.admin')

@section('content')
{{-- @if($numOfData < 3) --}}

	<h3>Add Carousel Items</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!!	Form::open(['route'=>'carousel.store','method'=>'Post','files'=>true]) !!}

				<div class="form-group">
					{{ Form::label('title','Title') }}
					{{ Form::text('title',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('logo_phrase','Logo Pharse') }}
					{{ Form::text('logo_phrase',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('button','Button') }}
					{{ Form::text('button',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('background_image','Background Photo') }}
					{{ Form::file('background_image',['class'=>'form-control']) }}
				</div>	

				{{ Form::submit('Create',array('class' => 'btn btn-primary')) }}

			{!! Form::close() !!}
			
			{{-- Show The Flash Message --}}
			@include('elements.flash')

		</div>
	</div>
{{-- @else
	<h3>Sorry, This Section Should Have Only Three Information</h3>
@endif --}}		
@endsection