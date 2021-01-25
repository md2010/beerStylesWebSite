<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;

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


Route::get('ale', [DisplayController::Class, 'showAle']);
Route::get('/', [DisplayController::Class, 'showHomeIntro']);
Route::get('characteristics', [DisplayController::Class, 'showCharacteristics']);
Route::get('lager', [DisplayController::Class, 'showLager']);
Route::get('paleAle', [DisplayController::class, 'showPaleAle']);
Route::get('stout', [DisplayController::class, 'showStout']);
Route::get('belgianStyle', [DisplayController::class, 'showBelgian']);
Route::get('strongAle', [DisplayController::class, 'showStrongAle']);
Route::get('porter', [DisplayController::class, 'showPorter']);
Route::get('IPA', [DisplayController::class, 'showIPA']);
Route::get('darkLager', [DisplayController::class, 'showDarkLager']);
Route::get('scotishStyle', [DisplayController::class, 'showScotishStyle']);
Route::get('bock', [DisplayController::class, 'showBock']);
Route::get('pilsnersAndPaleLager',  [DisplayController::class, 'showPilsnersAndPaleLager']);
Route::get('specialty',  [DisplayController::class, 'showSpecialty']);
Route::get('brownAle',  [DisplayController::class, 'showBrownAle']);
Route::get('wheatBeer',  [DisplayController::class, 'showWheatBeer']);
Route::get('wildAle',  [DisplayController::class, 'showWildAle']);

