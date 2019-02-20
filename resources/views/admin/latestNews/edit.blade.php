@extends('admin.layout.admin')

@section('content')

<h3>Edite Latest News Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!!	Form::open(['route'=>['latestnews.update',$news->id],'method'=>'Post','enctype'=>'multipart/form-data']) !!}

			{{ Form::hidden('_method','Put') }}

			{{ Form::hidden('oldImage1', $news->news_image) }}

			{{ Form::hidden('oldImage2', $news->dr_img) }}

			<div class="form-group">
				{{ Form::label('news_headline','News Headline') }}
				{{ Form::text('news_headline',$news->news_headline,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('news_image','News Image') }}
				<img class="img-responsive" src="/storage/photos/latestNews/{{$news->news_image}}"><br>
				{{ Form::file('news_image',['class'=>'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('news_date','News Date') }}
				{{ Form::date('news_date',$news->news_date,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('small_paragraph','Small Paragraph') }}
				{{ Form::text('small_paragraph',$news->small_paragraph,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('dr_name','Dr Name') }}
				{{ Form::text('dr_name',$news->dr_name,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('job_title','Dr Job Title') }}
				{{ Form::text('job_title',$news->job_title,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('dr_img','Dr Photo') }}
				<img class="img-responsive" src="/storage/photos/latestNews/{{$news->dr_img}}"><br>
				{{ Form::file('dr_img',['class'=>'form-control']) }}
			</div>
			
			{{ Form::submit('Update',array('class' => 'btn btn-success')) }}

		{!! Form::close() !!}
		
		{{-- Show The Flash Message --}}
		@include('elements.flash')

	</div>
</div>		
@endsection