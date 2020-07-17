<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Review;

class carReview extends Controller
{
    //

	public function insert()
	{
		$car = Car::all();

		return view('insert-review')->with('data',$car);

	}

    public function create(Request $request)
    {
    	$review = new Review;

    	$request->validate([

			'car_id' => 'required',
			'review' => 'required'

		]);

		$review->car_id = $request->car_id;
		$review->review = $request->review;

		$review->save();

		return redirect()->route('display-review'); 
    }

   public function displayAll()
	{
		
		$review = Review::all();

		return view('display-review')->with('data',$review);

	}

	public function displayCarReview($id)
	{

		$car = Review::where('car_id',$id)->get();

		return response($car);

	}
}
