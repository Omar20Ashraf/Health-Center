@extends('admin.layout.admin')

@section('content')
@if($numOfData < 3)

	<h3>Add Latest News Information</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!!	Form::open(['route'=>'latestnews.store','method'=>'Post','files'=>true]) !!}

				<div class="form-group">
					{{ Form::label('news_headline','News Headline') }}
					{{ Form::text('news_headline',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('news_image','News Image') }}
					{{ Form::file('news_image',['class'=>'form-control']) }}
				</div>

				<div class="form-group">
					{{ Form::label('news_date','News Date') }}
					{{ Form::date('news_date',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('small_paragraph','Small Paragraph') }}
					{{ Form::text('small_paragraph',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('dr_name','Dr Name') }}
					{{ Form::text('dr_name',null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('job_title','Dr Job Title') }}
					{{ Form::text('job_title',null,array('class'=>'form-control')) }}
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