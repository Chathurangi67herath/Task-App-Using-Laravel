<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


route::get('/task',[HomeController::class,'first']);

route::post('/savetask',[HomeController::class,'store']);

route::get('/task', function () {
    $data=App\models\Task::all();
    return view('task')->with('tasks',$data);

});

route::get('/markascompleted/{id}',[HomeController::class,'markascompleted']);

route::get('/markasnotcompleted/{id}',[HomeController::class,'markasnotcompleted']);

route::get('/deletetask/{id}',[HomeController::class,'deletetask']);

route::get('/updatetask/{id}',[HomeController::class,'updatetaskmethod']);

route::post('/updatetasks',[HomeController::class,'update']);

