<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\HabitatController;
use App\http\Controllers\FounderController;
use App\http\Controllers\AnimalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layout/main');
// });

Route::get('/', [HabitatController::class, 'allHabitat']); // main page aka habitat
Route::get('/habitat/detail{habitat}', [HabitatController::class, 'detail']); // detail animals

Route::get('/founder', [FounderController::class, 'allFounder']); // data founder
Route::get('/found', [FounderController::class, 'foundForm']); // get add data
Route::post('/add', [FounderController::class, 'addFounder']); // post data
Route::get('/edit/{founder}', [FounderController::class, 'editFounder']); // get edit data
Route::post('/update/{founder}', [FounderController::class, 'updateFounder']); // post update data
Route::delete('/delete/{founder}', [FounderController::class, 'delete']);

Route::get('/animal', [AnimalController::class, 'shortingAnimal']); // data animals
Route::get('/animal?idAnimal=1', [AnimalController::class, 'shortingAnimal']); // Tundra's Animal
Route::get('/animal/detail{animal}', [AnimalController::class, 'detail']); // detail animals
