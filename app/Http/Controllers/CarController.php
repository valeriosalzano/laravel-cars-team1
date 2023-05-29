<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Optional;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $optionals = Optional::all();

        return view('cars.create',compact('optionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
 
     */
    public function store(StoreCarRequest $request)
    {

        $form_data = $request->validated();

        $newCar = Car::create($form_data);

        if ($request->has('optionals')) {
            $newCar->optionals()->attach($request->optionals);
        }

        return redirect()->route('cars.show', ['car' => $newCar->id])->with('status', 'Car created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $optionals = Optional::all();
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $optionals = Optional::all();
        return view('cars.edit', compact('car','optionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $form_data = $request->all();

        $car->optionals()->sync($request->optionals);

        $car->update($form_data);
        return redirect()->route('cars.show', ['car' => $car->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $cars = Car::findOrFAil($id);
        $cars->delete();
        return redirect()->route('cars.index');
    }
}
