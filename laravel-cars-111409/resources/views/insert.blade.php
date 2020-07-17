@extends('layouts.app')

@section('content')


	<div class="container jumbotron">

		<div class="row justify-content-center">

			<div class="col-10 col-md-10 col-sm-10">
				
				<form method="POST" action="create" enctype="multipart/form-data" class="bg-white p-4">

					@csrf

					<div class="form-group row">
						<label for="make">Car Make</label>
						<input type="text" name="make" class="form-control" id="make">
					</div>

					<div class="form-group row">
						<label for="model">Car Model</label>
						<input type="text" name="model" class="form-control" id="model">
					</div>

					<div class="form-group row">
						<label for="year">Year</label>
						<input type="text" name="year" class="form-control" id="year">
					</div>

					<div class="form-group row">
						<label for="image">Car Image</label>
						<input type="file" name="image" class="form-control" id="image">
					</div>

					<div class="form-group row justify-content-center">
						<input type="submit" name="submit" class="btn btn-solid btn-success" value="Save">
					</div>
					
				</form>

			</div>
			
		</div>
		
	</div>


@endsection