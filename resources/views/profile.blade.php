@extends('layout.app')

@section('title', 'Profil')

@section('content')
<!-- Background header -->
<div class="w-full h-[420px] overflow-hidden">
  <img src="{{ asset('img/bgbunga.png') }}" alt="Bunga" class="w-full h-full object-cover" />
</div>

<!-- Profil -->
<div class="max-w-7xl mx-auto -mt-32">
  <div class="flex justify-between items-start gap-6 flex-wrap">

    <div class="flex-1 mt-36">
      <!-- Kiri: Nama, username,Tombol, badge -->
      <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
          <h1 class="text-4xl font-bold text-[#4C6518]">Jane Doe</h1>
          <p class="text-[#4C6518] mt-1 text-2xl">@JaneDoe</p>
        </div>
        <div class="flex gap-2">
          <button class="bg-gray-200 px-4 py-2 rounded-full font-medium">Pengaturan</button>
          <button class="bg-gray-200 px-4 py-2 rounded-full font-medium">Edit Profil</button>
        </div>
      </div>
      <div class="flex flex-wrap gap-2 mt-6">
        <span class="bg-[#798645] text-white text-xs font-semibold px-4 py-2 rounded-full">Cactus Enthusiast</span>
        <span class="bg-[#4A5E20] text-white text-xs font-semibold px-4 py-2 rounded-full">I'm the oxygen hero</span>
        <span class="bg-[#ACBD69] text-white text-xs font-semibold px-4 py-2 rounded-full">Plant Buddy</span>
      </div>

      <!-- Rekomendasi -->
      <div class="bg-[#F4F4F4] mt-8 px-6 py-4 rounded-xl shadow mx-auto">
        <div class="flex justify-between items-center">
          <h2 class="text-[#5B5B5B] font-semibold text-lg">Rekomendasi</h2>
          <a href="#" class="text-sm text-green-700">Selengkapnya</a>
        </div>
        <div class="flex gap-4 mt-3 mx-auto">
          @foreach(['rekomen1', 'rekomen2', 'rekomen3', 'rekomen4', 'rekomen5', 'rekomen1', 'rekomen2'] as $img)
            <img src="{{ asset('img/' . $img . '.png') }}" class="w-17 h-17 rounded-full" />
          @endforeach
        </div>
      </div>

      <!-- Tanamanku -->
      <div class="bg-[#F4F4F4] mt-8 px-6 py-4 rounded-xl shadow">
        <div class="flex justify-between items-center">
          <h2 class="font-semibold text-lg text-[#5B5B5B]">Tanamanku</h2>
          <a href="#" class="text-sm text-green-700">Selengkapnya</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-3">
          @foreach(['aloe', 'calathea', 'sirih', 'pilea'] as $plant)
            <div class="bg-[#F2EED7] p-1 rounded-xl">
              <img src="{{ asset('img/' . $plant . '.png') }}" class="rounded-xl {{ $plant === 'pilea' ? 'hidden md:block' : '' }}" />
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Kanan: Avatar, Statistik, Deskripsi -->
    <div class="flex flex-col items-end gap-3 pr-4 mx-auto">
      <img src="{{ asset('img/jane.png') }}" class="w-[280px] rounded-full border-4 border-white shadow-lg" alt="Jane Doe" />

      <div class="flex gap-8 text-center mt-8">
        <div>
          <p class="text-xl font-bold">50K</p>
          <p class="text-sm text-gray-500">Following</p>
        </div>
        <div>
          <p class="text-xl font-bold">120K</p>
          <p class="text-sm text-gray-500">Followers</p>
        </div>
        <div>
          <p class="text-xl font-bold">250K</p>
          <p class="text-sm text-gray-500">Likes</p>
        </div>
      </div>

      <div class="mt-8 text-left max-w-sm mx-auto">
        <h2 class="text-2xl font-semibold text-[#4A5E20]">Deskripsi</h2>
        <p class="text-gray-700 mt-2 leading-relaxed text-sm">
          Just a girl who talks to her plants—and they seem to listen. 🌱<br>
          Sharing daily green moments, plant care fails (and wins!), & experiments with Siramono ☀️💧<br>
          <strong>Let’s grow together!</strong>
        </p>
      </div>

      <div class="mt-2 max-w-4xl mx-auto px-4">
        <h2 class="text-2xl font-semibold text-[#4A5E20] mb-4">Postingan mu</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
          @foreach(range(1,5) as $i)
            <img src="{{ asset('img/post' . $i . '.png') }}" alt="Post {{ $i }}" class="rounded-lg object-cover w-[120px] h-[120px] mx-auto" />
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Streak Menanam -->
<div class="mt-8 w-full px-6 py-12 bg-[url('{{ asset('img/bgstreak.png') }}')] bg-cover bg-center shadow">
  <div class="max-w-6xl mx-auto bg-white rounded-2xl flex flex-col md:flex-row overflow-hidden">
    <div class="bg-[#7B9441] flex items-center justify-center md:w-1/3 w-full py-16">
      <span class="text-white text-5xl font-bold">12 hari</span>
    </div>
    <div class="bg-[#FBFAF5] md:w-2/3 w-full p-8">
      <h3 class="text-2xl font-bold text-[#5D7132] mb-6">May</h3>
      <div class="grid grid-cols-7 gap-4 text-center text-sm font-semibold text-[#5D7132]">
        <!-- Kalender static - dapat diganti dinamis -->
        @foreach(range(27, 31) as $d)
          <div class="{{ $d < 30 ? 'text-[#ccc]' : '' }}">{{ $d }}</div>
        @endforeach
        @foreach(range(1, 24) as $d)
          <div>{{ $d }}</div>
        @endforeach
        @foreach(range(25, 31) as $d)
          <div>{{ $d }}</div>
        @endforeach
      </div>
      <div class="flex justify-end mt-8 space-x-2">
        <span class="w-4 h-4 rounded-full bg-[#D6DEB8]"></span>
        <span class="w-4 h-4 rounded-full bg-[#C7D291]"></span>
        <span class="w-4 h-4 rounded-full bg-[#A6C367]"></span>
        <span class="w-4 h-4 rounded-full bg-[#9EB550]"></span>
        <span class="w-4 h-4 rounded-full bg-[#617A2F]"></span>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center px-10 py-8 mt-8">
  <div class="mb-2">
    <a href="{{ route('beranda') }}" class="mx-12">Beranda</a>
    <a href="{{ route('tanamanku') }}" class="mx-12">Tanamanku</a>
    <a href="{{ route('komunitas') }}" class="mx-12">Komunitas</a>
  </div>
  <img src="{{ asset('img/siramono_logo.png') }}" alt="Siramono Logo" class="mx-auto h-20 my-8">
  <p>&copy; Copyright &copy; SIRAMONO. All Rights Reserved.</p>
</footer>
@endsection
