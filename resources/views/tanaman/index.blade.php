@extends('layout.app')

@section('content')
<div class="container mx-auto py-8">
    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Daftar Tanaman</h1>
        <a href="{{ route('tanaman.create') }}" class="bg-green-600 text-white px-4 py-2 rounded">Tambah Tanaman</a>
    </div>

    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-green-600 text-white">
            <tr>
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Nama</th>
                <th class="py-2 px-4">Jenis</th>
                <th class="py-2 px-4">Tanggal Tanam</th>
                <th class="py-2 px-4">Kebutuhan Air</th>
                <th class="py-2 px-4">Intensitas Cahaya</th>
                <th class="py-2 px-4">TDS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tanaman as $item)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $item->id_tanaman }}</td>
                    <td class="py-2 px-4">{{ $item->nama_tanaman }}</td>
                    <td class="py-2 px-4">{{ $item->jenis_tanaman }}</td>
                    <td class="py-2 px-4">{{ $item->tanggal_tanam }}</td>
                    <td class="py-2 px-4">{{ $item->kebutuhan_air }}</td>
                    <td class="py-2 px-4">{{ $item->intensitas_cahaya }}</td>
                    <td class="py-2 px-4">{{ $item->tds }}</td>
                    <td class="py-2 px-4">
                        <form action="{{ route('tanaman.destroy', $item->id_tanaman) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
