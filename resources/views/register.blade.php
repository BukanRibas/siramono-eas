<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Siramono - Register</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center font-sans relative bg-cover bg-center"
  style="background-image: url('{{ asset('img/bgregister.png') }}');">

  <!-- Navigasi Tengah Atas -->
  <div class="absolute top-6 left-1/2 transform -translate-x-1/2 flex space-x-16 z-10">
    <a href="#" class="font-bold text-black hover:underline">Beranda</a>
    <a href="#" class="text-black hover:underline">Tanamanku</a>
    <a href="#" class="text-black hover:underline">Komunitas</a>
  </div>

  <!-- Form Container -->
  <div class="w-full max-w-md px-4 py-16 bg-white/60 rounded-3xl z-10">
    <h2 class="text-4xl font-bold text-[#4A5E20] text-center mb-2">Create an account</h2>
    <p class="text-sm text-[#4A5E20] text-center mb-6">Your journey starts here, take the first step</p>

    @if ($errors->any())
      <div class="text-red-500 text-sm mb-4">
        <ul>
          @foreach ($errors->all() as $error)
            <li>- {{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
      @csrf

      <div>
        <label for="username" class="block text-sm text-[#4A5E20] font-medium mb-2 mt-3">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}"
          placeholder="Masukkan Username" required
          class="w-full px-5 py-3 rounded-full bg-[#DDE7B4] placeholder-green-800 focus:outline-none" />
      </div>

      <div>
        <label for="nama" class="block text-sm text-[#4A5E20] font-medium mb-2 mt-3">Nama</label>
        <input type="text" id="nama" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama" required
          class="w-full px-5 py-3 rounded-full bg-[#DDE7B4] placeholder-green-800 focus:outline-none" />
      </div>

      <div>
        <label for="email" class="block text-sm text-[#4A5E20] font-medium mb-2 mt-3">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required
          class="w-full px-5 py-3 rounded-full bg-[#DDE7B4] placeholder-green-800 focus:outline-none" />
      </div>

      <div class="flex gap-4">
        <div class="relative w-1/2">
          <label for="password" class="block text-sm text-[#4A5E20] font-medium mb-1 mt-3">Password</label>
          <input type="password" id="password" name="password" placeholder="Masukkan Password" required
            class="w-full px-5 py-3 rounded-full bg-[#DDE7B4] placeholder-green-800 focus:outline-none" />
          <i class="fa fa-eye absolute right-5 top-1/2 -translate-y-1/2 cursor-pointer text-green-700"
            onclick="togglePassword('password', this)"></i>
        </div>
        <div class="relative w-1/2">
          <label for="password_confirmation" class="block text-sm text-[#4A5E20] font-medium mb-1 mt-3">Konfirmasi Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" required
            class="w-full px-5 py-3 rounded-full bg-[#DDE7B4] placeholder-green-800 focus:outline-none" />
          <i class="fa fa-eye absolute right-5 top-1/2 -translate-y-1/2 cursor-pointer text-green-700"
            onclick="togglePassword('password_confirmation', this)"></i>
        </div>
      </div>

      <div class="flex items-start gap-2 text-black text-sm mb-4 mt-4">
        <input type="checkbox" required />
        <label>
          Dengan mendaftarkan informasi pribadi mu, Anda setuju dengan
          <strong>Syarat & Ketentuan</strong> serta <strong>Privasi dan Kebijakan</strong> kami.
        </label>
      </div>

      <button type="submit"
        class="mt-5 w-full py-3 rounded-full bg-[#7A9148] text-white font-bold hover:bg-green-700 transition">
        Sign Up
      </button>
    </form>

    <p class="text-center text-sm text-green-700 mt-4 mb-2">
      Sudah punya akun?
      <a href="{{ route('login') }}" class="font-bold text-black hover:underline">Log In</a>
    </p>
  </div>

  <script>
    function togglePassword(id, icon) {
      const input = document.getElementById(id);
      if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      }
    }
  </script>
</body>

</html>
