@extends('admin.layout.admin')

@section('content')

<h3>Edite Appointment Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!!	Form::open(['route'=>['appointment.update',$items->id],'method'=>'Post','enctype'=>'multipart/form-data']) !!}

			{{ Form::hidden('_method','Put') }}

			{{ Form::hidden('oldBackgroundImage', $items->background_image) }}

				<div class="form-group">
					{{ Form::label('name','Section Title') }}
					{{ Form::text('name',$items->name,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
				{{ Form::label('background_image','Background Photo') }}
				<img class="img-responsive" src="/storage/photos/appointment/{{$items->background_image}}"><br>

				{{ Form::file('background_image',['class'=>'form-control']) }}
			</div>

			{{ Form::submit('Update',array('class' => 'btn btn-success')) }}

		{!! Form::close() !!}
		
		{{-- Show The Flash Message --}}
		@include('elements.flash')

	</div>
</div>		
@endsection