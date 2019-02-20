@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Researche</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>ID</th>
			<th>Reserach Headline</th>
			<th>Author Info</th>
			<th>Reserach</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>	
			<tr>
				<td> <h4>{{$reseraches->id}}</h4> </td>
				<td> <h4>{{$reseraches->research_name}}</h4> </td>	
				<td> <h4>{{$reseraches->author_info}}</h4> </td>
				<td> <h4>{!! $reseraches->reserach !!} </h4> 	</td>
				
				<td>
					<a href="{{route('singleNews.edit',$reseraches->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					
					{{-- delete button --}}
			        <form action="{{route('singleNews.destroy',$reseraches->id)}}"  method="POST">
			           	{{csrf_field()}}
			            {{method_field('DELETE')}}
			            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
			        </form>
		        </td>
	        </tr>	

	</tbody>
</table>

@endsection