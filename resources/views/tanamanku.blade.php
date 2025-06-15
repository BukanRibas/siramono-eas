@extends('layout.app')

@section('content')
<div class="bg-[#f4f1e8] text-gray-800">

  <!-- Hero Section -->
  <div class="bg-white px-2 md:px-12">
    <div class="flex flex-col md:flex-col justify-between overflow-hidden">
      <div class="flex flex-row w-full bg-[#F2EED7] rounded-2xl shadow-md">
        <div class="z-20 pl-32 mt-20">
          <h1 class="text-[50px] font-semibold poppins text-[#263011] leading-tight">
            How to connect <br> your plant to Siramono?
          </h1>
          <div class="flex flex-col items-start">
            <div class="w-72 h-[5px] bg-[#4A5E20] mb-12 mt-12 rounded"></div>
            <p class="text-xl text-black mb-6" style="font-family: Georgia, serif;">
              Tutorial simpel untuk mengkoneksikan tanamanmu ke robot Siramono.
              Ikuti langkah dan sambungkan tanamanmu pada website Siramono.
            </p>
            <a href="#" class="bg-[#4A5E20] hover:bg-[#5b704d] text-white py-3 px-8 rounded-full shadow-lg font-semibold mt-12">
              Let’s Get Started
            </a>
          </div>
        </div>
<div class="rounded-2xl w-full h-[650px] bg-no-repeat bg-cover bg-right"
     style="background-image: url('{{ asset('img/dauntanamanku.png') }}')">
        </div>
      </div>

      <!-- Section: Tanamanku -->
      <section class="px-6 py-10">
        <div class="flex flex-row justify-between items-center mb-8">
            <h2 class="text-4xl font-bold text-[#798645] mb-8">Tanamanku</h2>
            <div>
                <a href="{{ route('tanaman.index') }}" style="text-decoration: none;" class="bg-[#798645]  no-underline text-white py-2 px-10 rounded-full mt-2 inline-block">Riwayat Tanamanku</a>
            </div>
        </div>

        <div class="flex gap-8">
            @foreach ($tanaman as $t)
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                <!-- Gambar -->
                <div class="bg-[#F2EED7] p-4 rounded-xl shadow-md">
                <img src="{{ asset('img/' . ($t->nama_tanaman ?? 'default') . ('.png')) }}" alt="{{ $t->nama_tanaman }}" class="mb-4 rounded">
                <h3 class="text-[#5B5B5B] text-xl font-semibold mb-2">{{ $t->nama_tanaman }}</h3>
                <p class="text-[#5B5B5B] italic">{{ $t->jenis }}</p>
                </div>

                <!-- Informasi Sensor -->
                <div class="flex flex-col gap-4 text-sm text-[#333] w-full md:w-auto">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/sun.png') }}" alt="Sun" class="w-12 h-12">
                    <div>
                    <p class="font-semibold">Intensitas Cahaya</p>
                    <p>{{ $t->intensitas_cahaya . ' lux' ?? 'Tidak diketahui' }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/water.png') }}" alt="Kelembapan" class="w-12 h-12">
                    <div>
                    <p class="font-semibold">Kebutuhan Air</p>
                    <p>{{ $t->kebutuhan_air . '  ml' ?? '-' }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/pupuk.png') }}" alt="TDS" class="w-12 h-12">
                    <div>
                    <p class="font-semibold">TDS (pupuk)</p>
                    <p>{{ $t->tds ?? '-' }}</p>
                    </div>
                </div>
                <a href="{{ route('tanaman.edit', $t->id_tanaman) }}" style="text-decoration: none" class="bg-[#798645] text-white py-2 px-10 rounded-full mt-2 inline-block">Atur</a>
                </div>
            </div>
            @endforeach
        </div>
      </section>
    </div>
  </div>
</div>
@endsection
