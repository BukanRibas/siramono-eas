@extends('layout.app')

@section('title', 'Komunitas')

@section('content')
<div class="smt-2 flex justify-center">
  <div class="flex items-center bg-gray-100 shadow-lg px-4 py-3 rounded-md w-[720px]">
    <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" stroke-width="2"
      viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round"
        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103.75 3.75a7.5 7.5 0 0012.9 12.9z" />
    </svg>
    <input type="text" placeholder="Search by Keywords"
      class="bg-[#F3F3F1] w-full text-gray-800  focus:outline-none" />
  </div>
</div>

<!-- Main Grid -->
<div class="grid grid-cols-12 gap-6 px-8 py-6">

  <!-- Sidebar Kiri -->
  <aside class="col-span-3">
    <div class="flex flex-col items-center mb-6">
      <img src="{{ asset('img/imgkomunitas.png') }}" alt="Jane Doe"
        class="w-42 h-32 rounded-full object-cover" />
      <h2 class="mt-3 text-xl font-bold text-[#4C6518]">Jane Doe</h2>
      <p class="text-sm text-[#4C6518]">@JaneDoe</p>
    </div>
    <nav class="space-y-4">
      <a href="{{ route('komunitas') }}"
        class="{{ request()->routeIs('komunitas') ? 'flex items-center gap-4 w-full px-6 py-2 bg-[#4A5E20] text-white rounded-full font-semibold' : 'flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full' }}">
        <img src="{{ asset('img/iconnewsfeed.png') }}" class="w-6 h-6" />
        News Feed
      </a>

      <a href="{{ route('komunitas.messages') }}"
        class="{{ request()->routeIs('komunitas.messages') ? 'flex items-center justify-between w-full px-6 py-2 bg-[#4A5E20] text-white rounded-full font-semibold' : 'flex items-center justify-between w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full' }}">
        <div class="flex items-center gap-4">
          <img src="{{ asset('img/iconmessages.png') }}" class="w-6 h-6" />
          Messages
        </div>
        <span class="bg-black text-white rounded-full w-6 h-6 text-md text-center leading-6">6</span>
      </a>

      <a href="{{ route('komunitas.friends') }}"
        class="{{ request()->routeIs('komunitas.friends') ? 'flex items-center gap-4 w-full px-6 py-2 bg-[#4A5E20] text-white hover:bg-[#3e4e1a] rounded-full font-semibold' : 'flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full' }}">
        <img src="{{ asset('img/iconfriends.png') }}" class="w-6 h-6" />
        Friends
      </a>

      <a href="{{ route('komunitas.media') }}"
        class="{{ request()->routeIs('komunitas.media') ? 'flex items-center gap-4 w-full px-6 py-2 bg-[#4A5E20] text-white hover:bg-[#3e4e1a] rounded-full font-semibold' : 'flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full' }}">
        <img src="{{ asset('img/iconmedia.png') }}" class="w-6 h-6" />
        Media
      </a>

      <a href="{{ route('komunitas.settings') }}"
        class="{{ request()->routeIs('komunitas.settings') ? 'flex items-center gap-4 w-full px-6 py-2 bg-[#4A5E20] text-white hover:bg-[#3e4e1a] rounded-full font-semibold' : 'flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full' }}">
        <img src="{{ asset('img/iconsettings.png') }}" class="w-6 h-6" />
        Settings
      </a>
    </nav>
  </aside>

  <!-- Feed Utama -->
  <main class="col-span-6 space-y-6">
    <h2 class="text-2xl font-bold text-gray-800">Post</h2>

    <!-- Share Something -->
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

    <!-- Filter Feed -->
    <div class="flex justify-between items-center border-gray-300 mb-4">
      <span class="text-2xl font-semibold text-black">Feeds</span>
      <div class="flex gap-6 text-lg font-semibold text-gray-400">
        <span class="hover:text-[#4C6518] cursor-pointer">Recent</span>
        <span class="text-lg font-semibold text-[#4C6518]">Following</span>
        <span class="hover:text-[#4C6518] cursor-pointer">Populer</span>
      </div>
    </div>

    <!-- Post 1 -->
    <div class="bg-[#F2EFEF] p-4 rounded-xl shadow">
      <div class="flex items-start gap-3">
        <img src="{{ asset('img/rekomen1.png') }}" class="w-10 h-10 rounded-full object-cover" />
        <div>
          <div class="font-semibold text-[#4C6518]">
            hello bbg <span class="text-gray-400 text-sm">5 minutes ago</span>
          </div>
          <p class="mt-2 text-sm">
            guys, sender baru dikasih lidah buaya sama temen sender nih... mw minta tips&trick rawat lidah buaya dong.
          </p>
        </div>
      </div>
      <div class="flex gap-6 mt-3 text-gray-500 text-sm">
        <span>👁‍🗨 23.5K</span>
        <span>❤️ 23.5K</span>
        <span>💬 3.5K</span>
        <span>🔁 2.2K</span>
      </div>
    </div>

    <!-- Post 2 -->
    <div class="bg-[#F2EFEF] p-4 rounded-xl shadow">
      <div class="flex items-center gap-3">
        <img src="{{ asset('img/rekomen4.png') }}" class="w-10 h-10 rounded-full object-cover" />
        <div class="font-semibold text-[#4C6518]">
          Mr. Chair <span class="text-gray-400 text-sm">7 minutes ago</span>
        </div>
      </div>
      <p class="mt-2 text-sm">
        <em>*suatu hari di jam 10 malem*</em><br />
        "Mak, besok disuruh Bu Guru bawa tanaman hias sama potnya sekalian"
      </p>
      <div class="mt-3">
        <img src="{{ asset('img/meme1.png') }}" class="rounded-xl w-md object-cover" />
      </div>
      <div class="flex gap-6 mt-3 text-gray-500 text-sm">
        <span>👁‍🗨 23.5K</span>
        <span>❤️ 23.5K</span>
        <span>💬 3.5K</span>
        <span>🔁 2.2K</span>
      </div>
    </div>

    <!-- Post 3 -->
    <div class="bg-[#F2EFEF] p-4 rounded-xl shadow">
      <div class="flex items-center gap-3">
        <img src="{{ asset('img/rekomen5.png') }}" class="w-10 h-10 rounded-full object-cover" />
        <div class="font-semibold text-[#4C6518]">
          THE wife :3 <span class="text-gray-400 text-sm text-normal">2 minutes ago</span>
        </div>
      </div>
      <p class="mt-2 text-sm">
        keputusan terbaik sejauh ini adalah mulai pelihara banyak houseplants...
      </p>
      <div class="grid grid-cols-3 gap-2 mt-2">
        <img src="{{ asset('img/room1.png') }}" class="rounded-lg object-cover w-full h-auto" />
        <img src="{{ asset('img/room2.png') }}" class="rounded-lg object-cover w-full h-auto" />
        <img src="{{ asset('img/room3.png') }}" class="rounded-lg object-cover w-full h-auto" />
      </div>
      <div class="flex gap-6 mt-3 text-gray-500 text-sm">
        <span>👁‍🗨 23.5K</span>
        <span>❤️ 23.5K</span>
        <span>💬 3.5K</span>
        <span>🔁 2.2K</span>
      </div>
    </div>
  </main>

  <!-- Sidebar Kanan -->
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
        @php
        $suggestions = [
        [
        'name' => 'Pro Weebs',
        'username' => 'deezWeebz',
        'image' => 'rekomen1.png',
        ],
        [
        'name' => 'Fahri Putra',
        'username' => 'faaahriii',
        'image' => 'rekomen2.png',
        ],
        [
        'name' => 'hello bbg',
        'username' => 'raaawrr',
        'image' => 'rekomen3.png',
        ],
        ];
        @endphp

        @foreach ($suggestions as $sugg)
        <div class="flex items-center gap-3">
          <img src="{{ asset('img/' . $sugg['image']) }}" alt="{{ $sugg['name'] }}" class="w-12 h-12 rounded-full object-cover" />
          <div>
            <p class="font-medium text-black font-semibold">{{ $sugg['name'] }}</p>
            <p class="text-gray-500 text-xs">@{{ $sugg['username'] }}</p>
          </div>
        </div>
        @endforeach

        <a href="#" class="text-[#798645] font-semibold font-medium text-sm block mt-2">Selengkapnya</a>
      </div>
    </div>

  </aside>

</div>
@endsection