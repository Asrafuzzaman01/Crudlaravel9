<?php
 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crudcontroller;

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
// });

Route:: get('/show-data',[ Crudcontroller::class ,'showdata']);
Route:: get('/add-data',[ Crudcontroller::class ,'addData']);
Route:: post('/store-data',[ Crudcontroller::class ,'storeData']);
Route:: get('/edite-data/{id}',[ Crudcontroller::class ,'editeData']);
Route:: post('/update-data/{id}',[ Crudcontroller::class ,'updateData']);
Route:: get('/delete-data/{id}',[ Crudcontroller::class ,'deleteData']);


