@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="row g-0">
        <div class="col-md-5">
            <img src="{{ $produk->foto ? asset('storage/' . $produk->foto) : 'https://placehold.co/600x400?text=Produk+Vivi' }}"
                 class="img-fluid rounded-start w-100 h-100" style="object-fit: cover;" alt="{{ $produk->nama_produk }}">
        </div>
        <div class="col-md-7">
            <div class="card-body p-4">
                <span class="badge bg-info text-dark mb-2">{{ $produk->kategori->nama_kategori }}</span>
                <h2 class="fw-bold">{{ $produk->nama_produk }}</h2>
                <h4 class="text-success fw-bold my-3">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>
                <p class="card-text">{{ $produk->deskripsi }}</p>
                <a href="{{ route('home') }}" class="btn btn-secondary mt-3">&larr; Kembali ke Katalog</a>
            </div>
        </div>
    </div>
</div>
@endsection