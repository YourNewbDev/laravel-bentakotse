<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    public function index()
    {

        // $car = Car::find(1);

        // dd($car->favouredUsers);

        $user = User::find(1);

        dd($user->favouriteCars);

        // $car = Car::find(1);

        // $carType = CarType::where('name', 'Hatchback')
        // ->first();

        // dd($carType->cars);

        // $cars = Car::whereBelongsTo($carType)->get();

        // dd($cars);

        // $car = Car::find(1);

        // dd($car->images);

        //Create new image
        // $image = new CarImage(['image_path' => 'Something', 'position' => '3']);
        
        // $car->images()->save($image);

        // $car->images()->create(['image_path' => 'Something', 'position' => '4']);



        // $car = Car::find(2);

        // $carFeatures = new CarFeatures([
        //     'abs' => false,
        //     'air_conditioning' => false,
        //     'power_windows' => false,
        //     'power_door_locks' => false,
        //     'cruise_control' => false,
        //     'bluetooth_connectivity' => false,
        //     'remote_start' => false,
        //     'gps_navigation' => false,
        //     'heated_seats' => false,
        //     'climate_control' => false,
        //     'rear_parking_sensors' => false,
        //     'leather_seats' => false,
        // ]);

        // $car->features()->save($carFeatures);

        // $car = Car::find(1);

        // dump($car->features, $car->primaryImage);

        // // $car->features->abs = 0;
        // // $car->features->save();

        // $car->features->update(['abs' => 0]);

        return view('home.index');
    }
}
