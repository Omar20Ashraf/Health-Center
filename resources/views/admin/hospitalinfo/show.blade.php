@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Hospital Information</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>Title</th>
			<th >Number</th>
			<th >Work Time</th>
			<th >E-mail</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($infos as $info)
			<tr>
				<td><h4>{{$info->title}} </h4></td>	
				<td><h4>{{$info->number}} </h4></td>
				<td><h4>{{$info->worktime}} </h4></td>
				<td><h4>{{$info->email}} </h4></td>
				<td>
					<a href="{{route('hospitalinfo.edit',$info->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					
					{{-- delete button --}}
			        <form action="{{route('hospitalinfo.destroy',$info->id)}}"  method="POST">
			           	{{csrf_field()}}
			            {{method_field('DELETE')}}
			            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
			        </form>
		        </td>
	        </tr>
		@empty
			<h3>No Items has been added</h3>	
		@endforelse	

	</tbody>
</table>

@endsection