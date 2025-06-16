@extends('layout.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-6">DATA KOLEKSI TANAMAN SIRAMONO</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tanaman.store') }}" method="POST">
        @csrf

        <!-- Kode Tanaman (readonly) -->
        <div class="mb-4">
            <label for="kode_tanaman" class="block font-semibold mb-1">Kode Tanaman</label>
            <input type="text" name="kode_tanaman" value="{{ $kode_tanaman }}" readonly
                class="w-full px-4 py-2 border rounded bg-gray-100">
        </div>

        <!-- Nama Tanaman -->
        <div class="mb-4">
            <label for="nama_tanaman" class="block font-semibold mb-1">Nama Tanaman</label>
            <input type="text" name="nama_tanaman" value="{{ old('nama_tanaman') }}" placeholder="Nama Tanaman" required
                class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-green-400">
        </div>

        <!-- Jenis Tanaman -->
        <div class="mb-4">
            <label for="jenis_tanaman" class="block font-semibold mb-1">Jenis Tanaman</label>
            <select name="jenis_tanaman" required
                class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-green-400">
                <option value="">-- Pilih Jenis --</option>
                <option value="Tanaman Hias Daun">Tanaman Hias Daun</option>
                <option value="Tanaman Hias Bunga">Tanaman Hias Bunga</option>
                <option value="Tanaman Hias Gantung">Tanaman Hias Gantung</option>
                <option value="Tanaman Hias Air">Tanaman Hias Air</option>
                <option value="Tanaman Hias Sukulen dan Kaktus">Tanaman Hias Sukulen dan Kaktus</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="kebutuhan_air" class="block font-semibold mb-1">Kebutuhan Air</label>
            <input type="text" name="kebutuhan_air" value="{{ old('kebutuhan_air') }}" placeholder="Kebutuhan Air" required
                class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-green-400">
        </div>

        <div class="mb-4">
            <label for="intensitas_cahaya" class="block font-semibold mb-1">Intensitas Cahaya</label>
            <input type="text" name="kebutuhan_air" value="{{ old('intensitas_cahaya') }}" placeholder="Intensitas Cahaya" required
                class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-green-400">
        </div>

        <div class="mb-4">
            <label for="intensitas_cahaya" class="block font-semibold mb-1">TDS</label>
            <input type="text" name="kebutuhan_air" value="{{ old('tds') }}" placeholder="Intensitas Cahaya" required
                class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-green-400">
        </div>

        <!-- Status Penyiraman -->
        <div class="mb-4">
            <label for="status_penyiraman" class="block font-semibold mb-1">Status Penyiraman</label>
            <select name="status_penyiraman" required
                class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-green-400">
                <option value="">-- Pilih Status --</option>
                <option value="Otomatis">Otomatis</option>
                <option value="Manual">Manual</option>
            </select>
        </div>

        <!-- Tanggal Tanam -->
        <div class="mb-4">
            <label for="tanggal_tanam" class="block font-semibold mb-1">Tanggal Tanam</label>
            <input type="date" name="tanggal_tanam" value="{{ old('tanggal_tanam') }}" required
                class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-green-400">
        </div>

        <!-- Tombol -->
        <div class="flex justify-between mt-6">
            <a href="{{ route('tanaman.index') }}"
               class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">Kembali</a>
            <button type="submit"
                    class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">Tambah</button>
        </div>
    </form>
</div>
@endsection
