@extends('layout.app')

@section('content')
<div class="text-gray-800 bg-white min-h-screen px-6 md:px-20 py-8 relative">

  <!-- Tombol Bantuan -->
  <div class="absolute right-10 top-10">
    <button class="bg-[#4A5E20] text-white px-10 py-2 rounded-full">Bantuan</button>
  </div>

  <!-- Header -->
  <h1 class="text-4xl font-bold text-[#798645] mb-2">Atur Jadwal</h1>
  <p class="text-base mb-8 font-semibold italic">Atur jadwal penyiraman tanaman anda disini, rawat dengan bijak!</p>

  <!-- Formulir -->
  <form action="{{ route('tanaman.updateJadwal', $tanaman->id_tanaman) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">

      <!-- Gambar Tanaman -->
      <div class="bg-[#F2EED7] p-4 rounded-xl shadow-md mb-2">
        <img src="{{ asset('img/' . strtolower(str_replace(' ', '', $tanaman->nama_tanaman)) . '.png') }}"
             onerror="this.src='{{ asset('img/default.png') }}'" alt="{{ $tanaman->nama_tanaman }}"
             class="mb-12 rounded">
        <h3 class="text-[#5B5B5B] font-semibold mb-4 text-2xl">{{ $tanaman->nama_tanaman }}</h3>
        <p class="text-[#5B5B5B] text-sm italic">{{ $tanaman->jenis }}</p>
      </div>

      <!-- Form Input -->
      <div class="flex-1 space-y-6">

        <!-- Tanggal Siram -->
        <div>
          <label for="tanggal_siram" class="block text-2xl font-bold mb-2">Tanggal Siram</label>
          <input type="date" name="tanggal_siram" id="tanggal_siram" value="{{ old('tanggal_siram', $tanaman->tanggal_siram) }}"
                 class="w-full px-4 py-3 rounded-full bg-gray-100 focus:outline-none">
        </div>

        <!-- Kebutuhan Air -->
        <div>
          <label for="kebutuhan_air" class="block text-2xl font-bold mb-2">Kebutuhan Air (ml / hari)</label>
          <input type="number" name="kebutuhan_air" id="kebutuhan_air" placeholder="Contoh: 300"
                 value="{{ old('kebutuhan_air', $tanaman->kebutuhan_air) }}"
                 class="w-full px-4 py-3 rounded-full bg-gray-100 focus:outline-none">
        </div>

        <!-- Penyiraman Otomatis -->
        <div class="flex items-center justify-between">
          <label for="status_penyiraman" class="text-lg font-semibold">Penyiraman Otomatis</label>
          <label class="inline-flex relative items-center cursor-pointer">
            <input type="checkbox" name="status_penyiraman" value="Otomatis"
                   class="sr-only peer" {{ $tanaman->status_penyiraman === 'Otomatis' ? 'checked' : '' }}>
            <div
              class="w-11 h-6 bg-red-300 rounded-full peer peer-checked:bg-green-400 peer-focus:outline-none peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:h-5 after:w-5 after:rounded-full after:transition-all">
            </div>
          </label>
        </div>

        <!-- Tombol Simpan -->
        <button type="submit" class="bg-[#4A5E20] text-white py-2 px-16 rounded-full">Simpan</button>
      </div>
    </div>
  </form>
</div>
@endsection
