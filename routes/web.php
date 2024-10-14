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

    $mhs->load('asalKota', 'kodeKota');
    return view('detailmahasiswa', [
        'anggota' => $mhs,
        'asalkota' => $mhs -> asalkota,
        'kodekota' => $mhs -> kodekota,
    ]);
});

Route::get('/anggota', function (){
    return view('anggota', [
        "daftaranggota" => [
            [
                "id" => 1,
                "nama" => "Raden Hanif Satria Adjistama",
                "nim" => "K3520064",
            ],
            [
                "id" => 2,
                "nama" => "Jaisy Muhammad",
                "nim" => "K3522036",
            ]
        ]
    ]);
});