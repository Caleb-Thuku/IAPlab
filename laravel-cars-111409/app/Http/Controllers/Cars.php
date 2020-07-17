<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Review;

class Cars extends Controller
{
    //

	public function displayAll()
	{
		
		$car = Car::all();

		return view('display')->with('data',$car);

	}

	public function create(Request $request)
	{
		
		$car = new Car;

		$request->validate([

			'make'=>'required',
			'model'=>'required',
			'image'=>'required',
			'year'=>'required'

		]);

		$imageName = time().'.'.$request->image->extension();  
		

		$car->make = $request->make;
		$car->model = $request->model;
		$car->image = $imageName;
		$car->year = $request->year;

		$car->save();
		$request->image->move(public_path('images'), $imageName);

		return redirect()->route('display');

	}

	public function edit($id)
	{

		$car = Car::find($id);

		return view('edit')->with('data',$car);

	}

	public function update(Request $request, $id)
	{
		$car = Car::find($id);

		$imageName = time().'.'.$request->image->extension();  
		

		$car->make = $request->make;
		$car->model = $request->model;
		$car->image = $imageName;
		$car->year = $request->year;

		$car->save();
		$request->image->move(public_path('images'), $imageName);

		return redirect()->route('display');

	}

	public function delete($id)
	{
		$car = Car::find($id);

		$car->delete();

		return redirect()->route('display');

	}

	public function displayReviewCar($id)
	{
		$review = Review::find($id);

		$car_id = $review->car_id;

		$car = Car::find($car_id);

		return response($car);

	}

}
