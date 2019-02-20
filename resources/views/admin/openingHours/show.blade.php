@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Opening Hours</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>Regular Appointment</th>
			<th >Non Regular Appointment</th>
			<th >Colsed Apponntment</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($hours as $hour)
			<tr>
				<td> <h4>{!! $hour->regular_appointment !!}</h4>     </td>	
				<td> <h4>{!! $hour->non_regular_appointment !!}</h4> </td>
				<td> <h4>{!! $hour->colsed_apponntment !!} </h4>     </td>
				
				<td>
					<a href="{{route('openingHours.edit',$hour->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					
					{{-- delete button --}}
			        <form action="{{route('openingHours.destroy',$hour->id)}}"  method="POST">
			           	{{csrf_field()}}
			            {{method_field('DELETE')}}
			            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
			        </form>
		        </td>
	        </tr>
		@empty
			<h4>No hours has been added</h4>	
		@endforelse	

	</tbody>
</table>

@endsection