@extends('admin.layout.admin')

@section('content')
@if($numOfData < 1)

	<h3>Add Carousel Items</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!!	Form::open(['route'=>'openingHours.store','method'=>'Post']) !!}

				<div class="form-group">
					{{ Form::label('regular_appointment','Regular Appointment') }}
					{{ Form::textarea('regular_appointment',null,array('class'=>'form-control ckeditor')) }}
				</div>

				<div class="form-group">
					{{ Form::label('non_regular_appointment','Non Regular Appointment') }}
					{{ Form::textarea('non_regular_appointment',null,array('class'=>'form-control ckeditor')) }}
				</div>

				<div class="form-group">
					{{ Form::label('colsed_apponntment','Colsed Apponntment') }}
					{{ Form::textarea('colsed_apponntment',null,array('class'=>'form-control ckeditor')) }}
				</div>

				{{ Form::submit('Create',array('class' => 'btn btn-primary')) }}

			{!! Form::close() !!}
			
			{{-- Show The Flash Message --}}
			@include('elements.flash')

		</div>
	</div>
@else
	<h3>Sorry,This Section Should Only Have One Information</h3>
@endif		
@endsection