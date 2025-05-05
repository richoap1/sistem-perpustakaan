@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-semibold mb-6">Daftar Peminjaman Buku</h1>

        <!-- Tabel Daftar Peminjaman -->
        <!-- filepath: c:\laragon\www\sistem-perpustakaan\resources\views\Peminjaman\index.blade.php -->
        <table class="min-w-full table-auto bg-white border border-gray-300 rounded-md shadow-md">
    <thead class="bg-gray-200">
        <tr>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b border-gray-300">Nama Peminjam</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b border-gray-300">Judul Buku</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b border-gray-300">Tanggal Peminjaman</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b border-gray-300">Tanggal Pengembalian</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b border-gray-300">Denda</th>
        </tr>
    </thead>
    <tbody class="bg-white">
        @foreach ($peminjaman_bukus as $peminjaman)
            <tr class="border-b border-gray-300 hover:bg-gray-100">
                <td class="px-6 py-4 text-sm text-gray-900">{{ $peminjaman->user->name }}</td>
                <td class="px-6 py-4 text-sm text-gray-900">{{ $peminjaman->book->judul_buku }}</td>
                <td class="px-6 py-4 text-sm text-gray-900">{{ $peminjaman->tanggal_peminjaman }}</td>
                <td class="px-6 py-4 text-sm text-gray-900">{{ $peminjaman->tanggal_pengembalian }}</td>
                <td class="px-6 py-4 text-sm text-gray-900">
                    @if($peminjaman->pengembalian)
                        {{ 'Rp. ' . number_format($peminjaman->pengembalian->denda_keterlambatan, 0, ',', '.') }}
                    @else
                        {{ 'Rp. 0' }}
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


        <a href="{{ route('peminjaman.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded-md mt-4 inline-block">Add New Peminjaman</a>
    </div>
    @endsection