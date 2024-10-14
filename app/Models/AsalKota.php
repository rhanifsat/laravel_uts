<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsalKota extends Model
{
    use HasFactory;

    protected $table = 'asal_kotas';
    protected $primaryKey = 'id';
    protected $fillable = ['kota_asal'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'kota_asal');
    }
}