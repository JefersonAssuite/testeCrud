<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;


Route::get('/',[EventController::class,'index']);

/*Route::get('/events/list',[EventController::class,'list']);*/

Route::get('/events/create',[EventController::class,'create'])->middleware('auth');

Route::post('/events',[EventController::class,'store']);

Route::get('/events/edit/{id}',[EventController::class,'edit']);
Route::put('/events/update/{id}',[EventController::class,'update']);

Route::delete('/events/{id}',[EventController::class,'destroy']);

Route::get('/dashboard',[EventController::class,'dashboard'])->middleware('auth');


