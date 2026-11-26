<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Vivi Rasa Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('home') }}">
                <svg width="40" height="40" viewBox="0 0 100 100" class="me-2 rounded-circle shadow-sm">
                    <circle cx="50" cy="50" r="50" fill="#ffc107"/>
                    <text x="50" y="68" font-family="Arial, sans-serif" font-size="55" font-weight="bold" fill="#0d6efd" text-anchor="middle">V</text>
                </svg>
                PT Vivi Rasa Nusantara
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-2 mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Katalog Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning btn-sm fw-bold text-dark" href="{{ route('admin.produk.index') }}">Kelola Admin</a>
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

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <small>&copy; 2026 PT Vivi Rasa Nusantara - UMKM Makanan &amp; Minuman Khas Nusantara</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>