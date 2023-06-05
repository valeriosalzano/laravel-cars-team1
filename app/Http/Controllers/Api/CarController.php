<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(2);
        return response()->json(
            [
                'success' => true,
                'results' => $cars

            ]
        );

    }
    public function show($id){
        $car = Car::where('id',$id)->with['optionals']->first();
        return response()->json(
            [
                'success' => true,
                'results' => $car

            ]
        );

    }
}
