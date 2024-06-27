<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\PlanningController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/activity', [App\Http\Controllers\HomeController::class, 'index'])->name('activity.index');
Route::get('activity',[ActivityController::class,'index'])->name('activity.index');
Route::get('activitycreate', [ActivityController::class, 'create'])->name('activity.create');
Route::post('activitystore', [ActivityController::class,'store'])->name('activity.store');
Route::get('activity/edit/{id}',[ActivityController::class,'edit'])->name('activity.edit');
Route::post('activity/update/{id}',[ActivityController::class,'update'])->name('activity.update');
Route::get('activity/delete/{id}',[ActivityController::class,'destroy'])->name('activity.destroy');
// Route::get('planning',[ActivityController::class,'planning'])->name('planning');

Route::get('planning', [PlanningController::class,'index'])->name('planning.index');
Route::get('planningcreate', [PlanningController::class, 'create'])->name('planning.create');
// Route::get('planningcreate');

Route::post('planningstore', [PlanningController::class, 'store'])->name('planning.store');


