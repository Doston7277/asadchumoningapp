<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Data;


Route::get('/', function () {
    return view('home');
});


Route::get('/info', function () {
    $datas = Data::all();

    return view('info', compact('datas'));
});


Route::get('/info/{id}', function ($id) {
    $data = Data::query()->find($id);

    return view('info_detail', compact('data'));
});

Route::get('/info_create', function () {
    return view('info_create');
});
Route::post('/info/create', function (Request $request) {
    $data = new Data();
    $data->title = $request->title;
    $data->body = $request->body;
    $data->save();
    return back();
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
