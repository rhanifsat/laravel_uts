<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('home');
});

Route::get('/mahasiswa', function (){
    return view('mahasiswa');
});

Route::get('/anggota', function (){
    return view('anggota');
});