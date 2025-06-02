<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\CarModel;
use App\Models\User;
use Database\Factories\MakerFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    public function index()
    {
        $cars = Car::with(['primaryImage', 'city', 'carType', 'fuelType', 'maker', 'model'])
        ->where('published_at', '<', now())
        ->orderBy('published_at', 'desc')
        ->limit(30)
        ->get();

        return view('home.index', ['cars' => $cars]);
    }}
