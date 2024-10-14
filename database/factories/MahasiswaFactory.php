<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_mahasiswa' => $this -> faker -> name(),
            'kota_asal' => $this -> faker -> city(),
            'kode_kota' => strtoupper($this -> faker -> lexify('?')),
        ];
    }
}
