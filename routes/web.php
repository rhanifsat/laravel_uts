<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$pekerjaan = [
    [
        'id' => '1',
        'judul' => 'Guru',
        'gaji' => 'Rp. 17.000.000'
    ],
    [
        'id' => '2',
        'judul' => 'Desainer',
        'gaji' => 'Rp. 9.000.000'
    ],
    [
        'id' => '3',
        'judul' => 'Animator',
        'gaji' => 'Rp. 15.000.000'
    ]
    ];


Route::get('/', function () {
    return view('home', [
        'pekerjaan' => [
            [
                'id' => '1',
                'judul' => 'Guru',
                'gaji' => 'Rp. 17.000.000'
            ],
            [
                'id' => '2',
                'judul' => 'Desainer',
                'gaji' => 'Rp. 9.000.000'
            ],
            [
                'id' => '3',
                'judul' => 'Animator',
                'gaji' => 'Rp. 15.000.000'
            ]
        ]
    ]);
});

Route::get('/listkerja', function () use($pekerjaan) {
    return view('listkerja', [
        'pekerjaan' => $pekerjaan
    ]);
});

Route::get('/ listkerja/{id}', function ($id) use($pekerjaan){
    $kerja = Arr::first($pekerjaan, fn($kerja) => $kerja['id'] == $id);
    return view('kerja', ['kerja' => $kerja]);

});

Route::get('/contact', function () {
    return view('/contact');
});