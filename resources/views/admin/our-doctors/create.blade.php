@extends('admin.layout.admin')

@section('content')
@if($numOfData < 3)

	<h3>Add Our Doctors Information</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!!	Form::open(['route'=>'ourdoctors.store','method'=>'Post','files'=>true]) !!}

				<div class="form-group">
					{{ Form::label('dr_name','Dr Name') }}
					{{ Form::text('dr_name',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('dr_specialist','Dr Specialist') }}
					{{ Form::text('dr_specialist',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('dr_phone','Dr Phone') }}
					{{ Form::text('dr_phone',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('dr_email','Dr E-mail') }}
					{{ Form::text('dr_email',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('facebook','Dr Facebook') }}
					{{ Form::text('facebook',null,array('class'=>'form-control')) }}
				</div>			

				<div class="form-group">
					{{ Form::label('twitter','Dr Twitter') }}
					{{ Form::text('twitter',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('dr_img','Dr Photo') }}
					{{ Form::file('dr_img',['class'=>'form-control']) }}
				</div>
				{{ Form::submit('Create',array('class' => 'btn btn-primary')) }}

			{!! Form::close() !!}
			
			{{-- Show The Flash Message --}}
			@include('elements.flash')

		</div>
	</div>
@else
	<h3>Sorry,This Section Should Only Have Three Information</h3>
@endif		
@endsection