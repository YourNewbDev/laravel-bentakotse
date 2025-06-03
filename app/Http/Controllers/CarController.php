<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::find(1)
        ->cars()
        ->with('primaryImage', 'maker', 'model')
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        // ->appends(['sort' => 'price']);
        // ->withPath('/user/cars');

        return view('car.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('car.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('car.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        return view('car.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        return view('car.destroy');
    }

    public function search()
    {
        $query = Car::where('published_at', '<', now())
        ->with(['primaryImage', 'city', 'carType', 'fuelType', 'maker', 'model'])
        ->orderBy('published_at', 'desc');

        // $query->join('cities', 'cities.id', '=', 'cars.city_id')
        // ->where('cities.province_id', 76);

        // $carCount = $query->count();

        // $cars = $query->limit(30)->get();

        $cars = $query->paginate(10);


        return view('car.search', ['cars' => $cars]);
    }

    public function watchlist()
    {
        $cars = User::find(5)
        ->favouriteCars()
        ->with(['primaryImage', 'city', 'carType', 'fuelType', 'maker', 'model'])
        ->paginate(10);

        return view('car.watchlist', ['cars'=> $cars]);
    }
}
