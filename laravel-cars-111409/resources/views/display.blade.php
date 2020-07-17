@extends('layouts.app')

@section('content')

	<div class="container jumbotron jumbotron-fluid">

		<div class="row justify-content-end">
			<a href="/insert" class="btn btn-solid btn-primary mr-4 mb-3 float-right">Create New Car</a>
		</div>

		

		<div class="row justify-content-center">



			<div class="col-md-10 col-10 col-sm-10 bg-white p-2">
				
				<table class="table table-bordered table-stripped ">

					<thead>
						<th scope="col">ID</th>
						<th scope="col">Make</th>
						<th scope="col">Model</th>
						<th scope="col">Year</th>
						<th scope="col">Image</th>
						<th>Action</th>
					</thead>

					<tbody>
						

						@foreach( $data as $car )

						<tr>
							
							<td>{{ $car->id }}</td>
							<td>{{ $car->make }}</td>
							<td>{{ $car->model }}</td>
							<td>{{ $car->year }}</td>
							<td><img src="{{ asset('images/'.$car->image) }}" height="100px" width="100px"></td>
							<td>
								<form method="GET" action="edit/{{ $car->id }}">
									@csrf
									<input type="submit" name="edit" value="EDIT" class="btn btn-solid btn-warning">
								</form>
							</td>
							<td>
								<form method="POST" action="delete/{{ $car->id }}">
									@csrf
									<input type="submit" name="delete" value="DELETE" class="btn btn-solid btn-danger text-white">
								</form>
							</td>

						</tr>

						@endforeach

					</tbody>
					
				</table>

			</div>
			
		</div>
		
	</div>

@endsection
