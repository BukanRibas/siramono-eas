@extends('layout.app')

@section('title', 'Friends')

@section('content')
<div class="text-gray-800">


  <!-- Main Grid -->
  <div class="grid grid-cols-12 gap-6 px-8 py-6">
    <!-- Sidebar Kiri -->
    <aside class="col-span-3">
      <div class="flex flex-col items-center mb-6">
        <img src="{{ asset('img/imgkomunitas.png') }}" alt="Jane Doe" class="w-42 h-32 rounded-full object-cover" />
        <h2 class="mt-3 text-xl font-bold text-[#4C6518]">Jane Doe</h2>
        <p class="text-sm text-[#4C6518]">@JaneDoe</p>
      </div>
      <nav class="space-y-4">
        <a href="{{ route('komunitas') }}"
          class="flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
          <img src="{{ asset('img/iconnewsfeed.png') }}" alt="NewsFeed Icon" class="w-6 h-6" />News Feed
        </a>
        <a href="{{ route('komunitas.messages') }}"
          class="flex items-center justify-between w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
          <div class="flex items-center gap-4">
            <img src="{{ asset('img/iconmessages.png') }}" alt="Messages Icon" class="w-6 h-6" />
            Messages
          </div>
          <span class="bg-black text-white rounded-full w-6 h-6 text-md text-center leading-6">6</span>
        </a>
        <a href="{{ route('komunitas.friends') }}"
          class="{{ request()->routeIs('komunitas.friends') ? 'flex items-center gap-4 w-full px-6 py-2 bg-[#4A5E20] text-white hover:bg-[#3e4e1a] rounded-full font-semibold' : 'flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full' }}">
          <img src="{{ asset('img/iconfriends.png') }}" alt="Friends Icon" class="w-6 h-6" />
          Friends
        </a>
        <a href="#"
          class="flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
          <img src="{{ asset('img/iconmedia.png') }}" alt="Media Icon" class="w-6 h-6" />
          Media
        </a>
        <button class="flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
          <img src="{{ asset('img/iconsettings.png') }}" alt="Settings Icon" class="w-6 h-6" />
          Settings
        </button>
      </nav>
    </aside>

    <!-- Feed Utama -->
    <main class="col-span-6 space-y-6">
      <!-- Judul -->
      <div class="flex justify-between items-center">
        <h2 class="text-3xl text-[#798645] font-bold">Friends</h2>
        <span class="text-sm text-green-700">2 online</span>
      </div>

      <!-- Daftar teman -->
      <div class="grid grid-cols-3 gap-6 pt-6">
        <div class="flex flex-col items-center">
          <img src="{{ asset('img/rekomen1.png') }}" alt="hello bbg" class="w-20 h-20 rounded-full object-cover" />
          <p class="mt-4 text-md text-[#4A5E20]">@raaawrr</p>
        </div>
        <div class="flex flex-col items-center">
          <img src="{{ asset('img/rekomen3.png') }}" alt="Fahri Putra" class="w-20 h-20 rounded-full object-cover" />
          <p class="mt-4 text-md text-[#4A5E20]">@faaahriii</p>
        </div>
        <div class="flex flex-col items-center">
          <img src="{{ asset('img/rekomen5.png') }}" alt="Pro Weebs" class="w-20 h-20 rounded-full object-cover" />
          <p class="mt-4 text-md text-[#4A5E20]">@deezWeebz</p>
        </div>
      </div>
    </main>
  </div>
</div>
@endsection