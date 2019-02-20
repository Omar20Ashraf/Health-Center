@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Latest News Information</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>ID</th>
			<th>News Headline</th>
			<th >News Image</th>
			<th >News Date</th>
			<th >Small Paragraph</th>
			<th >Dr Name</th>
			<th >Dr Job Title</th>
			<th>Dr Photo</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($news as $item)
			<tr>
				<td> <h4>{{$item->id}}</h4> </td>
				<td> <h4>{!! $item->news_headline !!}</h4> </td>
				<td> 
					<img class="img-responsive" src="/storage/photos/latestNews/{{$item->news_image}}">
				</td>
				<td> <h4>{{$item->news_date}}</h4> </td>
				<td> <h4>{{$item->small_paragraph}}</h4> </td>					
				<td> <h4>{{$item->dr_name}}</h4> </td>
				<td> <h4>{{$item->job_title}} </h4> </td>
				<td> 
					<img class="img-responsive" src="/storage/photos/latestNews/{{$item->dr_img}}">
				</td>
				<td>
					<a href="{{route('singleNews.show',$item->id)}}" 
						class="btn btn-success" style="margin-bottom: 15px;">
						Recerach
					</a>

					<a href="{{route('latestnews.edit',$item->id)}}" 
						class="btn btn-default" style="margin-bottom: 15px;">
						Edit
					</a>
					
					{{-- delete button --}}
			        <form action="{{route('latestnews.destroy',$item->id)}}"  method="POST">
			           	{{csrf_field()}}
			            {{method_field('DELETE')}}
			            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
			        </form>
		        </td>
	        </tr>
		@empty
			<h4>No Items has been added</h4>	
		@endforelse	

	</tbody>
</table>

@endsection