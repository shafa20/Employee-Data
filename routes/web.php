<?php
use App\Http\Controllers\employeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[employeeController::class,'index']);
Route::get('/create',function(){
    return view('create');
    });
 Route::get('/test',function(){
        return view('test');
     });
 Route::post('/post',[employeeController::class,'store']);
 Route::get('/view/{is}',[employeeController::class,'view']);
 Route::get('/edit/{id}',[employeeController::class,'edit']);
 Route::put('/update/{id}',[employeeController::class,'update']);
 Route::delete('/delete/{id}',[employeeController::class,'destroy']);
