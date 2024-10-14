<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;

Route::get('/', function (){
    return view('home');
});

Route::get('/mahasiswa', function (){
    $mhs = Mahasiswa::all();
    if(!$mhs){
        abort(404);
    }
    return view('mahasiswa', ['anggota' => $mhs]);
});

Route::get('/mahasiswa/{id}', function ($id){
    $mhs = Mahasiswa::find($id);
    if(!$mhs){
        abort(404);
    }
    return view('detailmahasiswa', ['anggota' => $mhs]);
});

Route::get('/anggota', function (){
    return view('anggota', [
        "daftaranggota" => [
            [
                "id" => 1,
                "nama" => "nama-1",
                "nim" => "nim-1,"
            ],
            [
                "id" => 2,
                "nama" => "nama-2",
                "nim" => "nim-2,"
            ],
            [
                "id" => 3,
                "nama" => "nama-3",
                "nim" => "nim-3,"
            ]
        ]
    ]);
});