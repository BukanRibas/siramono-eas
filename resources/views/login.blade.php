@extends('layout.app2')
@section('title', 'Login')
@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Siramono</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  @vite('resources/css/app.css')

</head>

<body class="h-screen flex font-sans">
  <!-- Kolom Kiri -->
  <div class="w-1/2 bg-[#a2b377] relative overflow-hidden hidden md:block">
    <img src="{{ asset('img/daunbayangatas.png') }}" class="absolute top-0 left-0 w-[130%] opacity-200 z-0" alt="Bayangan atas" />
    <img src="{{ asset('img/daunbayangbawah.png') }}" class="absolute bottom-0 left-0 w-[130%] opacity-200 z-0" alt="Bayangan bawah" />
    <img src="{{ asset('img/daunataslogin.png') }}" class="absolute top-0 left-0 w-[130%] z-10" alt="Daun atas" />
    <img src="{{ asset('img/daunbawahlogin.png') }}" class="absolute bottom-0 left-0 w-[130%] z-50" alt="Daun bawah" />
  </div>

  <!-- Kolom Kanan -->
  <div class="w-full md:w-1/2 bg-white flex flex-col justify-center items-center px-6 relative">
    <div class="flex justify-between items-center mx-2 pt-2 pb-24 space-x-16">
      {{-- <a href="#" class="text-green-900 font-bold">Beranda</a>
      <a href="#">Tanamanku</a>
      <a href="#">Komunitas</a> --}}
    </div>

    <div class="max-w-md w-full">
      <h1 class="text-4xl font-bold text-[#4A5E20] text-center mb-2">Selamat Datang</h1>
      <p class="text-center text-sm text-[#8B9855] mb-6">Setiap langkah besar diawali oleh langkah kecil</p>

      {{-- Alert jika gagal login --}}
      @if ($errors->has('username'))
        <div class="text-red-600 text-sm mb-2">{{ $errors->first('username') }}</div>
      @endif

      <form id="loginForm" action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Username -->
        <div>
          <label for="username" class="block text-sm text-[#4A5E20] font-medium mb-1">Username atau Email</label>
          <input type="text" id="username" name="username" placeholder="Masukkan username/email"
            value="{{ old('username') }}"
            class="w-full px-5 py-3 rounded-full bg-[#d8e5a8] placeholder:text-gray-600 focus:outline-none"
            required />
          @error('username')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Password -->
        <div class="relative">
          <label for="password" class="block text-sm text-[#4A5E20] font-medium mb-1">Password</label>
          <input type="password" id="password" name="password" placeholder="Masukkan Password"
            class="w-full px-5 py-3 rounded-full bg-[#d8e5a8] placeholder:text-gray-600 focus:outline-none pr-12"
            required />
          <button type="button" id="togglePassword"
            class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-600 focus:outline-none">
            👁️
          </button>
          @error('password')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
          @enderror
          <a href="#" class="block text-sm text-[#8B9855] mt-2 mb-2 text-right">Lupa Password?</a>
        </div>

        <!-- Atau -->
        <div class="flex items-center gap-2 mt-8 mb-4">
          <hr class="flex-grow border-t border-gray-300" />
          <span class="text-sm text-gray-500">Atau</span>
          <hr class="flex-grow border-t border-gray-300" />
        </div>

        <!-- Tombol Login Sosial -->
        <div class="flex justify-center gap-4">
          <a href="#" class="flex items-center gap-2 px-5 py-2 border border-[#a2b377] rounded-full hover:bg-gray-50 transition">
            <img src="{{ asset('img/google.png') }}" class="w-5 h-5" alt="Google" />
            Google
          </a>
          <a href="#" class="flex items-center gap-2 px-5 py-2 border border-[#a2b377] rounded-full hover:bg-gray-50 transition">
            <i class="ri-facebook-fill text-blue-600"></i>
            Facebook
          </a>
        </div>

        <!-- Tombol Login -->
        <button type="submit"
          class="w-full bg-[#6d8442] text-white font-semibold py-3 mt-4 rounded-full hover:bg-[#5c7036] transition">
          Log in
        </button>
      </form>

      <p class="text-sm text-center text-gray-600 mt-4">
        Belum punya akun?
        <a href="{{ route('register-form') }}" class="text-green-800 font-semibold">Daftar Sekarang</a>
      </p>
    </div>
  </div>

  <script>
    // Toggle password visibility
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', () => {
      const isPassword = passwordInput.type === 'password';
      passwordInput.type = isPassword ? 'text' : 'password';
    });
  </script>
</body>

</html>
