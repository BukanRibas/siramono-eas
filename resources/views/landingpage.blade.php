<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Siramono - Selamat Datang</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body class="min-h-screen flex items-center justify-center bg-green-50 font-sans">
  <section class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
    <div class="text-center mb-6">
      <h1 class="text-3xl font-bold text-[#4A5E20]">Selamat Datang di Siramono</h1>
      <p class="text-sm text-[#6B7280] mt-2">Aplikasi perawatan tanaman dan komunitas hijau</p>
    </div>

    {{-- Tampilkan alert sukses atau pesan umum dari session --}}
    @if (session('status'))
      <div class="text-green-700 bg-green-100 border border-green-300 rounded p-2 text-sm mb-4">
        {{ session('status') }}
      </div>
    @endif

    {{-- Navigasi login/daftar --}}
    <div class="flex flex-col gap-4 mb-6">
      <a href="{{ route('login-form') }}"
         class="w-full text-center bg-[#6d8442] text-white py-3 rounded-full hover:bg-[#5c7036] transition">
        Masuk
      </a>
      <a href="{{ route('register-form') }}"
         class="w-full text-center border border-[#6d8442] text-[#6d8442] py-3 rounded-full hover:bg-[#f0f5ea] transition">
        Daftar
      </a>
    </div>

    <div class="flex items-center gap-2 mb-4">
      <hr class="flex-grow border-t border-gray-300" />
      <span class="text-sm text-gray-500">atau masuk dengan</span>
      <hr class="flex-grow border-t border-gray-300" />
    </div>

    <div class="flex flex-col gap-4">
      <a href="#" class="flex items-center justify-center gap-2 px-5 py-2 border border-[#a2b377] rounded-full hover:bg-gray-50 transition">
        <i class="ri-facebook-fill text-blue-600"></i>
        <span class="text-sm">Login dengan Facebook</span>
      </a>
      <a href="#" class="flex items-center justify-center gap-2 px-5 py-2 border border-[#a2b377] rounded-full hover:bg-gray-50 transition">
        <img src="{{ asset('img/google.png') }}" alt="Google" class="w-5 h-5" />
        <span class="text-sm">Login dengan Google</span>
      </a>
    </div>
  </section>
</body>

</html>
