@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold">Kelola Produk (Admin)</h3>
    <a href="{{ route('admin.produk.create') }}" class="btn btn-primary">+ Tambah Produk</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive bg-white p-3 rounded shadow-sm">
    <table class="table table-bordered align-middle mb-0">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    <img src="{{ $item->foto ? asset('storage/' . $item->foto) : 'https://placehold.co/100x70?text=No+Img' }}"
                         width="80" height="55" style="object-fit: cover;" class="rounded">
                </td>
                <td class="fw-bold">{{ $item->nama_produk }}</td>
                <td>{{ $item->kategori->nama_kategori }}</td>
                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('admin.produk.edit', $item->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection