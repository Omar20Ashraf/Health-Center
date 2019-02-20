@extends('admin.layout.admin')

@section('content')

<h3>Edite Rserach Information</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!!	Form::open(['route'=>['singleNews.update',$items->id],'method'=>'Post']) !!}
			{{ Form::hidden('_method','Put') }}

			<div class="form-group">
				{{ Form::label('research_name','Reserach name ') }}
				{{ Form::text('research_name',$items->research_name,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('author_info','Author Info') }}
				{{ Form::text('author_info',$items->author_info,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('reserach','Reserach') }}
				{{ Form::textarea('reserach',$items->reserach,array('class'=>'form-control ckeditor')) }}
			</div>

			{{ Form::submit('Update',array('class' => 'btn btn-success')) }}

		{!! Form::close() !!}
		
		{{-- Show The Flash Message --}}
		@include('elements.flash')

	</div>
</div>		
@endsection