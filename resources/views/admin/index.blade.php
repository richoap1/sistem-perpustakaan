@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 px-4">
    <h1 class="text-3xl font-semibold text-center text-blue-600 mb-8">Dashboard Admin</h1>
    <div class="overflow-x-auto shadow-lg rounded-lg bg-white p-6">
        <table class="min-w-full table-auto border-collapse border border-gray-200 text-gray-900">
            <thead>
                <tr class="bg-blue-600 text-white">
                    <th class="border border-gray-300 px-6 py-3 text-left rounded-tl-lg">Menu Admin</th>
                    <th class="border border-gray-300 px-6 py-3 text-left">Deskripsi</th>
                    <th class="border border-gray-300 px-6 py-3 text-left rounded-tr-lg">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white hover:bg-blue-50 transition-colors">
                    <td class="border border-gray-300 px-6 py-4 text-gray-900">Kelola Pengembalian Buku</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-900">Kelola data pengembalian buku yang dilakukan oleh pengguna.</td>
                    <td class="border border-gray-300 px-6 py-4">
                        <a href="{{ route('admin.pengembalian') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-700 transition">Masuk</a>
                    </td>
                </tr>
                <tr class="bg-white hover:bg-blue-50 transition-colors">
                    <td class="border border-gray-300 px-6 py-4 text-gray-900">Daftar Pengembalian</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-900">Melihat daftar pengembalian buku.</td>
                    <td class="border border-gray-300 px-6 py-4">
                        <a href="{{ route('pengembalian.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-700 transition">Masuk</a>
                    </td>
                </tr>
                <tr class="bg-white hover:bg-blue-50 transition-colors">
                    <td class="border border-gray-300 px-6 py-4 text-gray-900">Tambah Pengembalian</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-900">Form untuk menambah data pengembalian buku.</td>
                    <td class="border border-gray-300 px-6 py-4">
                        <a href="{{ route('pengembalian.create') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-700 transition">Masuk</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
