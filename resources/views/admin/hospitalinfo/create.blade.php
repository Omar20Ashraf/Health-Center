@extends('admin.layout.admin')

@section('content')
@if($numOfData < 1)

	<h3>Add Hospital Info</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!! Form::open(['route'=>'hospitalinfo.store','method'=>'Post']) !!}		

				<div class="form-group">
					{{ Form::label('title','Title') }}
					{{ Form::text('title',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('number','Number') }}
					{{ Form::text('number',null,array('class'=>'form-control')) }}
				</div>			

				<div class="form-group">
					{{ Form::label('worktime','Work Time') }}
					{{ Form::text('worktime',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('email','E-mail') }}
					{{ Form::text('email',null,array('class'=>'form-control')) }}
				</div>

				{{ Form::submit('Create',array('class'=>'btn btn-primary')) }}	

			{!! Form::close() !!}
			

			{{-- Show The Flash Message --}}
			@include('elements.flash')

		</div>
	</div>

@else
	<h3>Sorry,This Section Should Only Have One Information</h3>
@endif
@endsection