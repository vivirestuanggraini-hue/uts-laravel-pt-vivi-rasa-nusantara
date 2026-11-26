<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Vivi Rasa Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Tema Gold & Silver untuk PT Vivi Rasa Nusantara */
        body {
            background-color: #f4f5f7 !important; /* Silver terang lembut */
        }
        .navbar-gold-silver {
            background: linear-gradient(135deg, #b8860b 0%, #d4af37 50%, #c0c0c0 100%) !important;
            border-bottom: 3px solid #e5e4e2;
        }
        .text-primary {
            color: #996515 !important; /* Gold gelap agar terbaca jelas */
        }
        .btn-primary {
            background: linear-gradient(135deg, #c59b27, #996515) !important;
            border-color: #8a5a00 !important;
            color: #ffffff !important;
            font-weight: 600;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #d4af37, #b8860b) !important;
            border-color: #996515 !important;
        }
        .btn-silver-admin {
            background: linear-gradient(135deg, #f8f9fa, #c0c0c0) !important;
            border: 1px solid #8c8c8c !important;
            color: #212529 !important;
        }
        .btn-silver-admin:hover {
            background: #e2e6ea !important;
        }
        .card {
            border: 1px solid #d3d3d3 !important; /* Bingkai silver */
        }
        .badge-silver {
            background-color: #e5e4e2 !important;
            color: #4a4a4a !important;
            border: 1px solid #c0c0c0;
        }
        .footer-gold-silver {
            background: linear-gradient(135deg, #3a3a3a, #1f1f1f) !important;
            border-top: 3px solid #d4af37;
            color: #e5e4e2 !important;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark navbar-gold-silver shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center text-white" href="{{ route('home') }}" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.4);">
                <img src="{{ asset('logo.png') }}" alt="Logo PT Vivi" width="42" height="42" class="me-2 rounded-circle bg-white p-1 shadow-sm" style="object-fit: cover; border: 2px solid #e5e4e2;">
                PT Vivi Rasa Nusantara
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-2 mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold text-white" href="{{ route('home') }}" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">Katalog Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-silver-admin btn-sm fw-bold shadow-sm" href="{{ route('admin.produk.index') }}">Kelola Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-4 flex-grow-1">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="footer-gold-silver text-center py-3 mt-auto">
        <div class="container">
            <small>&copy; 2026 <span style="color: #d4af37; font-weight: bold;">PT Vivi Rasa Nusantara</span> - UMKM Makanan &amp; Minuman Khas Nusantara</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>