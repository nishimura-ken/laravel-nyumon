<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/diary', function () {
//    return 'Hello!';
//});

// 日記一覧
Route::get('/diary', [DiaryController::class, 'index'])
    ->name('diary.index');

// 日記作成フォーム
Route::get('/diary/create', [DiaryController::class, 'create'])
    ->name('diary.create');

// 日記保存
Route::post('/diary', [DiaryController::class, 'save'])
    ->name('diary.save');