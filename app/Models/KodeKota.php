<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeKota extends Model
{
    use HasFactory;

    protected $table = 'kode_kotas';
    protected $primaryKey = 'id';
    protected $fillable = ['kode_kota'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'kode_kota');
    }
}