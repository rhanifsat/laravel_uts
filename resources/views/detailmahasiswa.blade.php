<x-layout>
    <x-slot:heading>
        Halaman Detail Mahasiswa
    </x-slot:heading>
    @if (!empty($anggota))
        <ul>
            <li><b>{{$anggota -> nama_mahasiswa}}</b></li>
            <li>Asal Mahasiswa : {{$anggota -> kota_asal}}</li>
            <li>Kode Asal Mahasiswa : {{$anggota -> kode_kota}}</li>
        </ul>
    @else
        <h1>Detail Mahasiswa</h1>
    @endif
</x-layout>