<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\FirstController;
use App\Http\Controllers\CustomerController;


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

/*Route::get('/', function() {
    return view('welcome');
});
Route::get('about{id}', function($id){
    return 'About'.$id;
});
Route::view('welcome','welcome',['name' => 'Latha']);

Route::get('user/{name}' , function($name)
{
    return $name;
})->where ('name','[A-Za-z]+');

Route::get('user/{id}',function ($id)
{
    return $id;
})->where ('id','[0-9]+');

Route::get('user/{id}/{name}', function ($id,$name)
{
    return $id.' '.$name;
}) ->where (['id'=>'[0-9]+' , 'name'=>'[a-zA-Z]+']);

Route::get('first/{id}',[FirstController::class,'first']);

Route::get('test',function(){
    return view('components.first');
});*/

Route::get('customer',[CustomerController::class,'index']);


Route::post('customer-save',[CustomerController::class,'save']);