@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Researches</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>ID</th>
			<th>News Headline</th>
			<th >Author Info</th>
			<th >Reserach</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($items as $item)
			<tr>
				<td> <h4>{{$item->id}}</h4> </td>
				<td> <h4>{{$item->research_name}}</h4> </td>	
				<td> <h4>{{$item->author_info}}</h4> </td>
				<td> <h4>{!! $item->reserach !!} </h4> 	</td>
				
				<td>
					<a href="{{route('singleNews.edit',$item->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					
					{{-- delete button --}}
			        <form action="{{route('singleNews.destroy',$item->id)}}"  method="POST">
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