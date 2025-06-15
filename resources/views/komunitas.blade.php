@extends('layouts.app')

@section('content')
<div class="text-gray-800">
  <!-- Navbar -->
  <div class="flex justify-between items-center px-10 py-6 bg-white">
    <img src="{{ asset('img/siramono_logo.png') }}" alt="Logo Siramono" class="h-16" />
    <div class="flex gap-12 font-medium text-gray-800">
      <a href="{{ url('/beranda') }}">Beranda</a>
      <a href="{{ url('/tanamanku') }}">Tanamanku</a>
      <a href="{{ route('komunitas') }}" class="text-green-900 font-bold">Komunitas</a>
    </div>
    <div class="flex items-center gap-4">
      <span>Jane Doe</span>
      <a href="#">
        <img src="{{ asset('img/avatar.png') }}" class="w-13 h-10 rounded-full object-cover" alt="Jane Doe Profile" />
      </a>
    </div>
  </div>

  <!-- Search Bar -->
  <div class="mt-4 flex justify-center">
    <div class="flex items-center bg-gray-100 shadow-lg px-4 py-3 rounded-md w-[720px]">
      <svg class="w-5 h-5 text-gray-500 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103.75 3.75a7.5 7.5 0 0012.9 12.9z" />
      </svg>
      <input type="text" placeholder="Search by Keywords"
        class="bg-[#F3F3F1] w-full text-gray-600 placeholder-gray-500 focus:outline-none" />
    </div>
  </div>

  <!-- Main Grid -->
  <div class="grid grid-cols-12 gap-6 px-8 py-6">

    <!-- Sidebar Left -->
    <aside class="col-span-3">
      <div class="flex flex-col items-center mb-6">
        <img src="{{ asset('img/imgkomunitas.png') }}" alt="Jane Doe" class="w-42 h-32 rounded-full object-cover" />
        <h2 class="mt-3 text-xl font-bold text-[#4C6518]">Jane Doe</h2>
        <p class="text-sm text-[#4C6518]">@JaneDoe</p>
      </div>
      <nav class="space-y-4">
        <button class="flex items-center gap-4 text-left px-4 py-2 bg-[#4A5E20] text-white rounded-lg font-semibold w-[340px]">
          <img src="{{ asset('img/iconnewsfeed.png') }}" alt="News Feed Icon" class="w-6 h-6" /> News Feed
        </button>
        <a href="#" class="flex items-center justify-between w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
          <div class="flex items-center gap-4">
            <img src="{{ asset('img/iconmessages.png') }}" alt="Messages Icon" class="w-6 h-6" /> Messages
          </div>
          <span class="bg-black text-white rounded-full w-6 h-6 text-md text-center leading-6">6</span>
        </a>
        <a href="#" class="flex items-center justify-between w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
          <div class="flex items-center gap-4">
            <img src="{{ asset('img/iconfriends.png') }}" alt="Friends Icon" class="w-6 h-6" /> Friends
          </div>
          <span class="bg-black text-white rounded-full w-6 h-6 text-md text-center leading-6">3</span>
        </a>
        <a href="#" class="flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
          <img src="{{ asset('img/iconmedia.png') }}" alt="Media Icon" class="w-6 h-6" /> Media
        </a>
        <button class="flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
          <img src="{{ asset('img/iconsettings.png') }}" alt="Settings Icon" class="w-6 h-6" /> Settings
        </button>
      </nav>
    </aside>

    <!-- Main Feed -->
    <main class="col-span-6 space-y-6">
      <h2 class="text-2xl font-bold text-gray-800">Post</h2>
      <!-- Share Box -->
      <div class="bg-white p-4 rounded-xl shadow">
        <div class="flex gap-4">
          <img src="{{ asset('img/avatar.png') }}" class="w-10 h-10 rounded-full object-cover" />
          <textarea placeholder="Share Something..." rows="2"
            class="w-full bg-gray-100 rounded-xl p-3 resize-none text-sm focus:outline-none"></textarea>
        </div>
        <div class="flex items-center justify-between mt-3">
          <div class="flex gap-3 text-sm text-gray-600">
            <span>📁 File</span>
            <span>🖼️ Image</span>
            <span>📍 Location</span>
            <span>🔓 Public</span>
          </div>
          <button class="bg-[#A5B75D] text-white px-6 py-2 rounded-full text-sm">Post</button>
        </div>
      </div>

      <!-- Post List (Example) -->
      @foreach ([1, 2, 3] as $i)
      <div class="bg-[#F2EFEF] p-4 rounded-xl shadow">
        <div class="flex items-start gap-3">
          <img src="{{ asset('img/rekomen' . $i . '.png') }}" alt="Profil {{ $i }}" class="w-10 h-10 rounded-full object-cover" />
          <div>
            <div class="font-semibold text-[#4C6518]">
              User {{ $i }} <span class="text-gray-400 text-sm">{{ now()->subMinutes($i * 3)->diffForHumans() }}</span>
            </div>
            <p class="mt-2 text-sm">Ini adalah contoh postingan komunitas {{ $i }}.</p>
          </div>
        </div>
        <div class="flex gap-6 mt-3 text-gray-500 text-sm">
          <span>💥 {{ rand(10, 99) }}K</span>
          <span>❤️ {{ rand(10, 99) }}K</span>
          <span>💬 {{ rand(1, 9) }}K</span>
          <span>🔁 {{ rand(1, 9) }}K</span>
        </div>
      </div>
      @endforeach
    </main>

    <!-- Sidebar Right -->
    <aside class="col-span-3 space-y-6">
      <div>
        <h3 class="font-bold text-black text-2xl mb-3">Stories</h3>
        <div class="flex gap-2">
          <img src="{{ asset('img/stories1.png') }}" class="w-40 h-60 rounded-lg" />
          <img src="{{ asset('img/stories2.png') }}" class="w-40 h-60 rounded-lg" />
        </div>
      </div>
      <div>
        <h3 class="font-bold text-black text-2xl mb-3">Suggestions</h3>
        <div class="space-y-3 text-sm">
          @foreach ([1, 2, 3] as $i)
          <div class="flex items-center gap-3">
            <img src="{{ asset('img/rekomen' . $i . '.png') }}" alt="Profil {{ $i }}" class="w-12 h-12 rounded-full object-cover" />
            <div>
              <p class="font-medium text-black font-semibold">User {{ $i }}</p>
              <p class="text-gray-500 text-xs">@user{{ $i }}</p>
            </div>
          </div>
          @endforeach
          <a href="#" class="text-[#798645] font-semibold text-sm block mt-2">Selengkapnya</a>
        </div>
      </div>
    </aside>
  </div>
</div>
@endsection
