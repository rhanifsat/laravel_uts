<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $fillable = ['nama', 'kota_asal', 'kode_kota'];

    public function asalKota()
    {
        return $this->belongsTo(AsalKota::class, 'kota_asal');
    }

    public function kodeKota()
    {
        return $this->belongsTo(KodeKota::class, 'kode_kota');
    }
}