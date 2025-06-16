<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siramono - Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Inter&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #fff;
      color: #333;
    }

    /* (CSS langsung tetap dipakai karena sebagian tidak bisa digantikan Tailwind) */
  </style>
</head>

<body class="bg-[#f4f1e8] text-gray-800">
  <!-- Navbar -->
  <div class="flex justify-between items-center px-10 py-6 bg-white">
    <img src="{{ asset('img/siramono_logo.png') }}" alt="Logo Siramono" class="h-16" />
    <div class="flex gap-12 font-large text-gray-800">
      <a href="{{ route('beranda') }}" class="text-green-900 font-bold">Beranda</a>
      <a href="{{ route('tanamanku') }}">Tanamanku</a>
      <a href="{{ route('komunitas') }}">Komunitas</a>
    </div>

    <div class="flex items-center gap-4">
      <a href="{{ route('login') }}" class="text-sm text-gray-700">Log In</a>
      <a href="{{ route('register') }}">
        <button class="bg-[#798645] text-white text-sm px-5 py-2 rounded-full hover:bg-[#55522a] transition">
          Sign In
        </button>
      </a>
    </div>
  </div>

  <!-- Hero Section -->
  <div class="bg-white px-6 md:px-12">
    <div class="bg-[#F2EED7] rounded-2xl flex flex-col md:flex-row items-center justify-between overflow-hidden shadow-md">
      <div class="max-w-xl z-20 ml-16">
        <h1 class="text-[120px] font-serif text-[#4A5E20] leading-tight">SIRAMONO</h1>
        <div class="flex flex-col items-center">
          <p class="text-xl text-[#6C845A] mb-6 text-center" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 24px;">
            one step closer to a green world
          </p>
          <button class="bg-[#6C845A] hover:bg-[#5b704d] text-white py-3 px-8 rounded-full shadow-lg font-semibold">
            Let’s Get Started
          </button>
        </div>
      </div>
      <div class="relative w-[400px] md:w-[700px] z-10 mt-12 md:mt-0">
        <img src="{{ asset('img/bgdaun.png') }}" alt="Background daun" class="w-full rounded-xl object-cover">
        <img src="{{ asset('img/daun.png') }}" alt="Overlay daun" class="absolute top-[-40px] left-[-80px] w-[280px] z-20">
      </div>
    </div>

    <!-- Rekomendasi Tanaman -->
    <div class="bg-white rounded-2xl flex flex-col md:flex-row items-center justify-between mx-4 md:mx-4 mt-2 p-4 relative z-10">
      <section class="py-10">
        <h2 class="text-3xl font-semibold mb-4">Rekomendasi Tanaman</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          @php
          $plants = [
          ['img' => 'aloe.png', 'name' => 'Lidah Buaya', 'latin' => 'Aloe vera'],
          ['img' => 'pilea.png', 'name' => 'Pilea', 'latin' => 'Pilea peperomioides'],
          ['img' => 'sirih.png', 'name' => 'Sirih Gading Satin', 'latin' => 'Scindapsus pictus'],
          ['img' => 'calathea.png', 'name' => 'Calathea Fasciata', 'latin' => 'Goeppertia fasciata']
          ];
          @endphp

          @foreach ($plants as $plant)
          <div class="bg-[#F2EED7] p-4 rounded-xl shadow">
            <img src="{{ asset('img/' . $plant['img']) }}" alt="{{ $plant['name'] }}" class="mb-2 rounded">
            <h3 class="text-sm font-semibold" style="font-size: 18px;">{{ $plant['name'] }}</h3>
            <p class="text-xs italic">{{ $plant['latin'] }}</p>
          </div>
          @endforeach
        </div>
      </section>
    </div>
  </div>

  <!-- Community Section -->
  <div class="bg-white section-community flex justify-between px-10 py-10">
    <div class="section-title text-4xl font-bold" style="flex: 1;">
      Discover Our Community <br>
      <span class="text-[#647D3D] font-bold">Popular and New</span>
    </div>
    <div class="community-intro text-base" style="flex: 1;">
      <p class="mt-2">
        Siramono Community adalah tempat berbagi dan berdiskusi seputar Siramono robot penyiram tanaman pintar.
        Temukan inspirasi, tips, dan dukungan teknis untuk merawat tanamanmu dengan bantuan teknologi.
      </p>
      <p class="mt-4">Temui sesama entusiast Tanaman di Komunitas Siramono!</p>
    </div>
  </div>

  <section class="community bg-white flex flex-col md:flex-row px-6 md:px-12 gap-4">
    <div class="community-left flex-1">
      <div class="community-card large">
        <img src="{{ asset('img/komunitas1.png') }}" alt="Monstera">
      </div>
    </div>
    <div class="community-right flex-1 grid grid-cols-2 gap-4">
      <div class="community-card small">
        <img src="{{ asset('img/komunitas2.png') }}" alt="Indoor Plants">
      </div>
      <div class="community-card small">
        <img src="{{ asset('img/komunitas3.png') }}" alt="Please Don't Die">
      </div>
      <div class="community-card small bottom col-span-2">
        <img src="{{ asset('img/komunitas4.png') }}" alt="Garden Hacks">
      </div>
    </div>
  </section>

  <!-- Highlight Tanaman -->
  <section class="px-4 py-16 flex justify-center bg-white">
    <div class="bg-[#e5ebce] px-10 md:px-32 py-20 md:py-28 rounded-3xl flex flex-col md:flex-row items-center gap-12 w-full max-w-[1460px] shadow-lg">
      <div class="bg-[#a6b56e] p-10 md:p-4 rounded-3xl">
        <img src="{{ asset('img/aloe.png') }}" alt="Lidah Buaya" class="w-[280px] md:w-[950px] h-auto object-contain drop-shadow-2xl" />
      </div>
      <div class="text-[#4b5a2a] max-w-2xl">
        <h3 class="text-5xl font-serif mb-4">Lidah buaya</h3>
        <p class="text-xl mb-6">
          <span class="font-bold">Nama ilmiah</span> : <em>Aloe vera</em>
        </p>
        <h4 class="text-2xl font-semibold mb-2">Fun Fact</h4>
        <p class="text-base leading-relaxed mb-6">
          Lidah buaya dikenal sebagai "tanaman keabadian" oleh bangsa Mesir kuno karena manfaatnya yang luar biasa
          untuk kesehatan dan kecantikan. Gel-nya mengandung lebih dari 75 senyawa aktif!
        </p>
        <h4 class="text-2xl font-semibold mb-2">Cara Merawat</h4>
        <ul class="text-base leading-relaxed space-y-2">
          <li><strong>Cahaya</strong> : Suka cahaya terang tidak langsung. Letakkan di dekat jendela.</li>
          <li><strong>Penyiraman</strong> : Siram saat tanah benar-benar kering (1–2 minggu sekali).</li>
          <li><strong>Pemupukan</strong> : Sebulan sekali dengan pupuk ringan.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-[#E9EFD4] text-center px-10 py-8">
    <div class="mb-2">
      <a href="#" class="mx-12 font-bold">Beranda</a>
      <a href="#" class="mx-12">Tanamanku</a>
      <a href="#" class="mx-12">Komunitas</a>
    </div>
    <img src="{{ asset('img/siramono_logo.png') }}" alt="Siramono Logo" class="mx-auto h-20 my-8">
    <p>&copy; Copyright © SIRAMONO. All Rights Reserved.</p>
  </footer>
</body>

</html>