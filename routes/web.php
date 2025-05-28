<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
->name('home');

Route::get('/car/search',[CarController::class, 'search'])->name('car.search');
Route::resource('car', CarController::class);

Route::get('/signup', [SignupController::class, 'create'])
->name('signup');

Route::get('/login', [LoginController::class, 'login'])
->name('login');


// Route::get('/about', function () {

//     return view('about');
// })->name('about');


// Route::get('/sum/{num1}/{num2}', [CalController::class, 'sum'])->whereNumber(['num1', 'num2']);

// Route::get('/subtract/{num1}/{num2}', [CalController::class,'subtract'])->whereNumber(['num1', 'num2']);

// Route::controller('cal', 'CalController');


// Route::get('/sum/{num1}/{num2}', function(float $num1, float $num2) {
//     return "Sum is " . $num1 + $num2;
// })->whereNumber(['num1', 'num2']);

// Route::get('/car', [CarController::class, 'index']);

// // Route::controller(CarController::class)->group(function () {
// //     Route::get('/car', 'index');
// //     Route::get('/my-car', 'index');
// //     Route::get('/your-car', 'index');
// // });

// Route::get('/car', CarController::class);

// // Route::get('/product/{id}', function(string $id) {
// //     return "Product ID=$id";
// // })->whereNumber('id');

// // Route::get('/user/{username}', function (string $username) {
// //     // return "Username=$username";
// // })->where("username", "[a-z]+");

// // Route::get('/p/{lang}/product/{id}', function(string $lang, string $id) {
// //     return "Language=$lang, ID=$id";
// // })->name("product.view");

// // Route::name('admin.')->group(function () {
// //     Route::get('/users', function (){
// //         return '/users';
// //     })->name('users');
// // });