<?php

use App\Http\Controllers\NinjaController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/about", function () {
    return view("about");
})->name("about");

Route::get("test", function () {
    dump("hello laravel ");
    $users = User::all();
    return view("Test.test", compact('users'));
})->name("test");

Route::get("users/create", function () {
    return view("Users.create");
})->name("Users.create");

Route::get('/users/{id}', function ($id) {
    $user = User::where("id", "=", $id)->first();
    return view('Users.detail', compact("id", "user"));
})->name("Users.detail");

Route::post("users", function (Request $request) {
    dd($request->all());
    $fields = $request->validate([
        "name" => "required",
        "email" => "required",
    ]);
    return;
})->name("Users.createProcess");


// ninjas
Route::get('ninjas', [NinjaController::class, 'index'])->name("ninjas.index");
Route::get('ninjas/detail/{ninja}', [NinjaController::class, 'detail'])->name("ninjas.detail");
Route::get('ninjas/create', [NinjaController::class, 'create'])->name("ninjas.create");
Route::post('ninjas/create', [NinjaController::class, 'createAction'])->name("ninjas.createAction");
Route::get('ninjas/update/{ninja}', [NinjaController::class, 'update'])->name("ninjas.update");
Route::put('ninjas/update/{ninja}', [NinjaController::class, 'updateAction'])->name("ninjas.updateAction");
Route::delete('ninjas/{ninja}', [NinjaController::class, 'delete'])->name("ninjas.delete");
