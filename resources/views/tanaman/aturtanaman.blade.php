@extends('layout.app')

@section('content')
<div class="text-gray-800 bg-[#f4f1e8] min-h-screen px-6 md:px-20 py-6">

  <!-- Judul -->
  <h1 class="text-4xl font-bold text-[#798645] mb-2">Control Panel</h1>
  <p class="text-[16px] mb-8 font-semibold italic">Atur tanaman anda disini, rawat dengan bijak!</p>

  <!-- Kartu Tanaman -->
  <div class="flex flex-col md:flex-row items-center md:items-start gap-6">

    <!-- Kiri: Gambar dan nama -->
    <div class="bg-[#F2EED7] p-4 rounded-xl shadow-md mb-2">
      <img src="{{ asset('img/' . strtolower(str_replace(' ', '', $tanaman->nama_tanaman)) . '.png') }}"
           onerror="this.src='{{ asset('img/default.png') }}'" alt="{{ $tanaman->nama_tanaman }}" class="mb-12 rounded">
      <h3 class="text-[#5B5B5B] font-semibold mb-4 text-2xl">{{ $tanaman->nama_tanaman }}</h3>
      <p class="text-[#5B5B5B] text-sm italic">{{ $tanaman->jenis }}</p>
    </div>

    <!-- Kanan: Kontrol dan Info -->
    <div class="flex-1 relative">

      <!-- Tombol Bantuan -->
      <div class="absolute right-0 -top-24">
        <button class="bg-[#4A5E20] text-white px-10 py-2 rounded-full">Bantuan</button>
      </div>

      <!-- Status -->
      <div class="mb-8 pt-2">
        <h3 class="text-3xl font-bold mb-1">Status</h3>

        <div class="flex items-center justify-between mb-2">
          <p class="text-[20px] font-semibold">Automatic Watering Bot</p>
          <div class="flex items-center gap-2">
            <span id="statusLabel" class="text-sm italic text-gray-700">Offline</span>
            <label class="inline-flex relative items-center cursor-pointer">
              <input type="checkbox" id="statusToggle" class="sr-only peer">
              <div
                class="w-11 h-6 bg-red-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-400">
              </div>
            </label>
          </div>
        </div>

        <p class="text-sm italic text-gray-500 mb-4">
          Robot otomatis yang membantu menyiram tanaman anda secara real-time dan mudah untuk dijadwalkan.
        </p>

        <!-- Tombol Aksi -->
        <div class="flex gap-4">
          <a href="{{ route('tanaman.jadwal', $tanaman->id_tanaman) }}">
            <button class="bg-[#4A5E20] text-white py-2 px-16 rounded-full">Atur Jadwal</button>
          </a>
        </div>
      </div>

      <!-- Informasi Sensor -->
      <div>
        <h3 class="text-3xl font-bold mb-2">Informasi</h3>
        <div class="space-y-4">
          <div class="flex items-center gap-3">
            <img src="{{ asset('img/sun.png') }}" class="w-10 h-10">
            <div>
              <p class="font-semibold">Intensitas Cahaya</p>
              <p>{{ $tanaman->intensitas_cahaya ?? 'Tidak tersedia' }}</p>
            </div>
          </div>
          <div class="flex items-center gap-3">
            <img src="{{ asset('img/water.png') }}" class="w-10 h-10">
            <div>
              <p class="font-semibold">Kebutuhan Air</p>
              <p>{{ $tanaman->kebutuhan_air ?? 'Tidak tersedia' }}</p>
            </div>
          </div>
          <div class="flex items-center gap-3">
            <img src="{{ asset('img/pupuk.png') }}" class="w-10 h-10">
            <div>
              <p class="font-semibold">TDS (pupuk)</p>
              <p>{{ $tanaman->tds ?? 'Tidak tersedia' }}</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
  const toggle = document.getElementById("statusToggle");
  const label = document.getElementById("statusLabel");

  toggle.addEventListener("change", () => {
    label.textContent = toggle.checked ? "Online" : "Offline";
  });
</script>
@endsection
