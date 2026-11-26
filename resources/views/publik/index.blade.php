@extends('layouts.app')

@section('content')
<div class="p-4 mb-4 bg-white rounded-3 shadow-sm border d-flex flex-column flex-md-row align-items-center gap-4">
    <svg width="110" height="110" viewBox="0 0 120 120" class="rounded-4 shadow-sm flex-shrink-0">
        <rect width="120" height="120" rx="20" fill="#0d6efd"/>
        <circle cx="60" cy="50" r="32" fill="#ffc107"/>
        <text x="60" y="63" font-family="Arial, sans-serif" font-size="38" font-weight="bold" fill="#0d6efd" text-anchor="middle">V</text>
        <text x="60" y="102" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="#ffffff" text-anchor="middle">PT VIVI</text>
    </svg>
    <div>
        <h1 class="fw-bold text-primary mb-2">Selamat Datang di PT Vivi Rasa Nusantara</h1>
        <p class="lead mb-0 fs-6 text-secondary">
            PT Vivi Rasa Nusantara adalah UMKM lokal yang bergerak di bidang produksi makanan ringan dan minuman kemasan khas Nusantara. Kami berkomitmen menghadirkan camilan renyah serta minuman segar berkualitas tinggi yang diolah dari bahan baku alami pilihan petani lokal, higienis, dan tanpa bahan pengawet buatan.
        </p>
    </div>
</div>

<h3 class="mb-3 fw-bold">Daftar Produk Kami</h3>
<div class="row g-4">
    @foreach ($produks as $item)
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ $item->foto ? asset('storage/' . $item->foto) : 'https://placehold.co/600x400?text=Produk+Vivi' }}"
                 class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $item->nama_produk }}">
            <div class="card-body d-flex flex-column">
                <span class="badge bg-info text-dark mb-2 align-self-start">{{ $item->kategori->nama_kategori }}</span>
                <h5 class="card-title fw-bold">{{ $item->nama_produk }}</h5>
                <p class="text-success fw-bold fs-5">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                <p class="card-text text-muted small">{{ Str::limit($item->deskripsi, 80) }}</p>
                <a href="{{ route('produk.detail', $item->id) }}" class="btn btn-primary mt-auto">Lihat Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection