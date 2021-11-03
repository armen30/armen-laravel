<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarsRequest;
use App\Http\Requests\CreateProductsRequest;
use App\car;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function getCars()
    {
        return view('cars', [
            'cars' => Car::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function postCars(CreateCarsRequest$request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $cars = Car::create($data);
        return redirect()->route('cars-list')->with('success', 'You have successfully saved your car');
    }

    public function getCarsList()
    {
        $cars = Car::get();

        return view("cars-list", [
            'cars' => Car::where('user_id', Auth::user()->id)->get()
        ]);

    }

    public function postCarsList(Request $request) {

        $cars = Car::all();

        $delCar = $request->only('id');

        $delete = Car::where('id', $delCar)->delete();

        return redirect('cars-list');

    }
}
