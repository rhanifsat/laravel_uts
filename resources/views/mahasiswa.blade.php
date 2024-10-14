<x-layout>
  <x-slot:heading>
    Data Mahasiswa
  </x-slot:heading>
  @if (!empty($anggota))
    <ul>
      @foreach ($anggota as $mhs)
        <a href="mahasiswa/{{$mhs['id']}}" class="text-blue-600 hover:underline">
          <li>{{$mhs -> nama_mahasiswa}}</li>
        </a>
      @endforeach
    </ul>
  @else
    <h1>Detail Mahasiswa</h1>
  @endif
</x-layout>