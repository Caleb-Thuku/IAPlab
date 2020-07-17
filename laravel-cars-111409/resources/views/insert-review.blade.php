@extends('layouts.app')

@section('content')


	<div class="container jumbotron">

		<div class="row justify-content-center">

			<div class="col-10 col-md-10 col-sm-10">
				
				<form method="POST" action="/create/review" enctype="multipart/form-data" class="bg-white p-4">

					@csrf

					<div class="form-group row">
						<label for="select_id">Select Car Make</label>

						
						<select name="car_id" class="form-control">
							@foreach($data as $car)
							<option value="{{ $car->id }}" >{{ $car->make }}</option>
							@endforeach
						</select>
						
					</div>

				<div class="form-group">
				    <label for="exampleFormControlTextarea1">Review</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="review"></textarea>
				  </div>

					<div class="form-group row justify-content-center">
						<input type="submit" name="submit" class="btn btn-solid btn-success" value="Save">
					</div>
					
				</form>

			</div>
			
		</div>
		
	</div>


@endsection