@extends('admin.layout.admin')

@section('content')

	<h3>Add Appointemnt Department Items</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!!	Form::open(['route'=>'department.store','method'=>'Post']) !!}

				<div class="form-group">
					{{ Form::label('departments','Departments Name') }}
					{{ Form::text('departments',null,array('class'=>'form-control')) }}
				</div>	

				{{ Form::submit('Create',array('class' => 'btn btn-primary')) }}

			{!! Form::close() !!}
			
			{{-- Show The Flash Message --}}
			@include('elements.flash')

		</div>
	</div>		
@endsection