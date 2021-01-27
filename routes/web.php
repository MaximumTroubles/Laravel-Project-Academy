<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ReviewController;
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
//     return view('welcome');
// }); //? Это стандартаня надпись и так делать не красиво 


// Route::get('/', 'MainController@index') //? Так указывали метод до laravel 8 

Route::get('/', [MainController::class, 'index']); //?Подкючаем контроллер в виде массива и первым параметром идет название и обозночение что это класс через : а вторым название метода который будет использовать
// Route::view('/', 'main.index');

//? Страница контакты
Route::get('/contacts', [MainController::class, 'contacts']);
Route::post('/contacts', [MainController::class, 'getContacts']);
Route::get('/sale', [StoreController::class, 'sale']);
Route::get('/reviews ', [ReviewController::class, 'reviews']);
Route::post('/reviews ', [ReviewController::class, 'getReviews']);
