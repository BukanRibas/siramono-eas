<div class="flex justify-between items-center px-10 py-6 bg-white">
    {{-- Logo --}}
    <a href="{{ route('beranda') }}">
        <img src="{{ asset('img/siramono_logo.png') }}" alt="Logo Siramono" class="h-16" />
    </a>

    {{-- Navigasi --}}
    <div class="flex gap-12 text-lg">
        <a href="{{ route('beranda') }}"
            class="{{ request()->routeIs('beranda') ? 'text-green-900 font-bold' : 'text-black' }} hover:underline">
            Beranda
        </a>

        <a href="{{ route('tanamanku') }}"
            class="{{ request()->routeIs('tanamanku') ? 'text-green-900 font-bold' : 'text-black' }} hover:underline">
            Tanamanku
        </a>

        <a href="{{ route('komunitas') }}"
            class="{{ request()->routeIs('komunitas') ? 'text-green-900 font-bold' : 'text-black' }} hover:underline">
            Komunitas
        </a>
    </div>

    {{-- User Info --}}
    <div class="flex items-center gap-4">
        <span>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
        <a href="{{ route('profile') }}">
            <img src="{{ asset('img/avatar.png') }}" class="w-10 h-10 rounded-full object-cover" alt="User Profile" />
        </a>
    </div>
</div>