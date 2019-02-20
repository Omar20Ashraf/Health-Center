@extends('admin.layout.admin')

@section('content')

<h3>Edite Opening Hours Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!!	Form::open(['route'=>['openingHours.update',$hours->id],'method'=>'Post']) !!}
			{{ Form::hidden('_method','Put') }}

			<div class="form-group">
				{{ Form::label('regular_appointment','Regular Appointment') }}
				{{ Form::textarea('regular_appointment',$hours->regular_appointment,array('class'=>'form-control ckeditor')) }}
			</div>

			<div class="form-group">
				{{ Form::label('non_regular_appointment','Non Regular Appointment') }}
				{{ Form::textarea('non_regular_appointment',$hours->non_regular_appointment,array('class'=>'form-control ckeditor')) }}
			</div>

			<div class="form-group">
				{{ Form::label('colsed_apponntment','Colsed Apponntment') }}
				{{ Form::textarea('colsed_apponntment',$hours->colsed_apponntment,array('class'=>'form-control ckeditor')) }}
			</div>

			{{ Form::submit('Update',array('class' => 'btn btn-success')) }}

		{!! Form::close() !!}
		
		{{-- Show The Flash Message --}}
		@include('elements.flash')

	</div>
</div>		
@endsection