<?php

use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SingleDataController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WhyMustradController;
use App\Http\Controllers\WhySafefoodController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('headings-pictures', SingleDataController::class)->names('headings');
Route::resource('advantages', AdvantageController::class)->names('advantages');
Route::get('advantages-list', [AdvantageController::class, 'list'])->name('advantages_list');

Route::resource('policy', PolicyController::class)->names('policy');
Route::get('policy-list', [PolicyController::class,'list'])->name('policy_list');

Route::resource('mustard', WhyMustradController::class)->names('mustard');
Route::get('mustard-list', [WhyMustradController::class, 'list'])->name('mustard_list');
Route::resource('why-safe-food', WhySafefoodController::class)->names('safe_food');
Route::get('why-safe-food-list', [WhySafefoodController::class,'list'])->name('safe_food_list');
Route::resource('mustard-oil', WebsiteController::class)->names('mustard_oil');