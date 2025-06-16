@extends('layout.app')

@section('title', 'Messages')

@section('content')
<div class="min-h-screen grid grid-cols-12">
  {{-- Sidebar --}}
  <aside class="col-span-3 bg-white p-6">
    <div class="flex flex-col items-center mb-6">
      <img src="{{ asset('img/imgkomunitas.png') }}" alt="Jane Doe" class="w-42 h-32 rounded-full object-cover" />
      <h2 class="mt-3 text-xl font-bold text-[#4C6518]">Jane Doe</h2>
      <p class="text-sm text-[#4C6518]">@JaneDoe</p>
    </div>
    <nav class="space-y-4">
      <a href="{{ route('komunitas') }}"
        class="flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
        <img src="{{ asset('img/iconnewsfeed.png') }}" class="w-6 h-6" /> News Feed
      </a>
      <a href="{{ route('komunitas.messages') }}"
        class="flex items-center gap-4 px-6 py-2 bg-[#4A5E20] text-white rounded-full font-semibold">
        <img src="{{ asset('img/iconmessages.png') }}" class="w-6 h-6" /> Messages
      </a>
      <a href="{{ route('friends') }}"
        class="flex items-center justify-between w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
        <div class="flex items-center gap-4">
          <img src="{{ asset('img/iconfriends.png') }}" class="w-6 h-6" /> Friends
        </div>
        <span class="bg-black text-white rounded-full w-6 h-6 text-center text-sm leading-6">3</span>
      </a>
      <a href="#" class="flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
        <img src="{{ asset('img/iconmedia.png') }}" class="w-6 h-6" /> Media
      </a>
      <button class="flex items-center gap-4 w-full px-6 py-2 text-gray-700 hover:bg-gray-200 rounded-full">
        <img src="{{ asset('img/iconsettings.png') }}" class="w-6 h-6" /> Settings
      </button>
    </nav>
  </aside>

  {{-- Main Content --}}
  <main class="col-span-9 px-10 py-8">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-3xl font-bold text-[#798645]">Messages</h2>
      <div class="text-right text-[#798645]">2 <span class="text-black font-normal">Request</span></div>
    </div>

    <div class="space-y-6">
      {{-- Contoh Message --}}
      @php
      $messages = [
      ['img' => 'img/post1.png', 'name' => 'Amriza Saskirana', 'text' => 'Mulai dari satu pot kecil, sekarang udah jadi pojok hijau di kamar 😅 Ada rekomendasi tanaman lucu buat nambah koleksi? Lagi pengen yang unik-unik gitu!', 'badge' => 2],
      ['img' => 'img/rekomen3.png', 'name' => 'Cindy Fitri', 'text' => 'Gais! Rumah jadi makin adem dan gemes sejak mulai ngerawat tanaman indoor 🪴🌞 Ada saran tanaman yang estetik tapi nggak ribet dirawat gak nih?', 'badge' => 6],
      ['img' => 'img/rekomen2.png', 'name' => 'Ribas Satria', 'text' => 'Tanaman di dalam rumah tuh ternyata bisa bikin suasana adem banget. Ada yang punya rekomendasi jenis tanaman indoor yang estetik tapi mudah dirawat?', 'badge' => 5],
      ['img' => 'img/rekomen5.png', 'name' => 'Damar Adji', 'text' => 'You: Awalnya cuma coba-coba pelihara satu tanaman, sekarang malah jadi ketagihan 😂 Teman-teman punya saran tanaman indoor yang cocok buat pemula?'],
      ['img' => 'img/rekomen4.png', 'name' => 'Farhan Maulana', 'text' => 'Baru mulai koleksi tanaman indoor nih! Lagi suka banget liat yang hijau-hijau di rumah. Ada rekomendasi tanaman yang gampang dirawat nggak?', 'badge' => 3],
      ['img' => 'img/rekomen1.png', 'name' => 'Farhan Maulana', 'text' => 'You: Niat awalnya biar ruangan keliatan hidup, eh malah jadi hobi 😆 Teman-teman biasanya pelihara tanaman apa sih di dalam rumah?'],
      ['img' => 'img/post2.png', 'name' => 'Mahalini', 'text' => 'You: Lihat dong pojok hijau aku yang baru jadi! 😍 Lagi cari-cari ide tanaman buat ditambahin. Kasih ide dong, tanaman yang cocok buat indoor?'],
      ['img' => 'img/post3.png', 'name' => 'Alexandra', 'text' => 'Tanaman di kamar makin banyak, sampe bingung ini masih kamar apa hutan mini 🤭 Ada yang bisa rekomen tanaman anti drama buat indoor gak?', 'badge' => 2],
      ['img' => 'img/post5.png', 'name' => 'Salma Salsabil', 'text' => 'You: Awalnya cuma iseng beli satu pot monstera. Eh sekarang tiap pagi disapa 7 daun baru 😭❤️ Butuh rekomendasi tanaman yang gak butuh banyak matahari dong~']
      ];
      @endphp

      @foreach ($messages as $msg)
      <div class="flex items-center justify-between bg-white p-4 rounded-lg shadow">
        <div class="flex items-center gap-4">
          <img src="{{ asset($msg['img']) }}" class="w-14 h-14 rounded-full object-cover" />
          <div>
            <h3 class="font-semibold text-sm">{{ $msg['name'] }}</h3>
            <p class="text-sm text-[#4C6518]">{{ $msg['text'] }}</p>
          </div>
        </div>
        @if(isset($msg['badge']))
        <span class="bg-[#B3C965] text-white rounded-full px-3 py-1 text-sm">{{ $msg['badge'] }}</span>
        @endif
      </div>
      @endforeach
    </div>
  </main>
</div>
@endsection