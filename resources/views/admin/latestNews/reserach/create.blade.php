@extends('admin.layout.admin')

@section('content')

<h3>Add Rserach Information</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!!	Form::open(['route'=>'singleNews.store','method'=>'Post']) !!}

			<div class="form-group">
				{{ Form::label('research_name','Reserach name ') }}
				{{ Form::text('research_name',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('author_info','Author Info') }}
				{{ Form::text('author_info',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('reserach','Reserach') }}
				{{ Form::textarea('reserach',null,array('class'=>'form-control ckeditor')) }}
			</div>

			{{ Form::submit('Create',array('class' => 'btn btn-primary')) }}

		{!! Form::close() !!}
		
		{{-- Show The Flash Message --}}
		@include('elements.flash')

	</div>
</div>		
@endsection