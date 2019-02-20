@extends('admin.layout.admin')

@section('content')

{{-- @if($numOfData < 1) --}}

	<h3>Add About Items</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!!	Form::open(['route'=>'about.store','method'=>'Post','files'=>true]) !!}

				<div class="form-group">
					{{ Form::label('description','Description') }}
					{{ Form::textarea('description',null,array('class'=>'form-control ckeditor')) }}
				</div>

				<div class="form-group">
					{{ Form::label('dr_name','Dr Name') }}
					{{ Form::text('dr_name',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('dr_specialist','Dr Specialist') }}
					{{ Form::text('dr_specialist',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('dr_img','Dr Photo') }}
					{{ Form::file('dr_img',['class'=>'form-control']) }}
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
	<h3>Sorry, This Section Should Only Have one Information</h3>
@endif --}}			
@endsection