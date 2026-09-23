<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');

Route::get('/student/{id}', function (string $id) {
    return view('student', ['id' => $id]);
})->name('student.profile');

Route::fallback(function () {
    return response('ไม่พบหน้าเว็บ', 404);
});
