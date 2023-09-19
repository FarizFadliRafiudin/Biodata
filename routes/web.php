<?php

use App\Http\Controllers\UserC;
use App\Http\Controllers\PesertadidikPDF;
use App\Http\Controllers\PesertadidikR;
use Illuminate\Support\Facades\Route;

Route::get('pesertadidik/pdf', [PesertadidikPDF::class, 'pdf'])->middleware('auth');
Route::resource('pesertadidik', PesertadidikR::class)->middleware('auth');

// Route::get('pesertadidik/pdf', [PesertadidikPDF::class, 'pdf']);

Route::get('adminlte', function () {
    return view('adminlte');
})->middleware('auth');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('register' , [UserC::class, 'register']);
Route::get('/' , [UserC::class, 'login'])->name('login');
Route::post('register', [UserC::class, 'register_action'])->name('register.action');
Route::post('login', [UserC::class, 'login_action'])->name('login.action');
Route::get('logout', [UserC::class, 'logout'])->name('logout');