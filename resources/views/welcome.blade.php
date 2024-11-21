<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Blossom POS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* Parallax Effect */
        .parallax {
            background-image: url('/images/banner.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            transition: background-position 0.2s ease-out;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4); /* Menambahkan overlay gelap dengan transparansi */
            z-index: 1;
        }

        .hero h1, .hero p {
            position: relative; /* Memastikan teks tetap di atas overlay */
            z-index: 5;
        }

        .hero a {
            position: relative; /* Memastikan tombol tetap di atas overlay */
            z-index: 3; /* Mengangkat tombol agar berada di atas overlay */
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #ff4081;
            border: none;
            padding: 15px 30px;
            font-size: 1.2rem;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin: 0 10px;
        }

        .btn-custom:hover {
            background-color: #e91e63;
        }

        .features {
            margin-top: 50px;
        }

        .feature-item {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .feature-item i {
            font-size: 3rem;
            color: #ff4081;
            margin-bottom: 15px;
        }

        .feature-item h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .feature-item p {
            color: #666;
            font-size: 1rem;
        }

        @media (max-width: 767px) {
            .features {
                padding: 50px;
            }

            .feature-item {
                padding: 15px;
            }
            .feature-item i {
                font-size: 2.5rem;
            }
            .feature-item h3 {
                font-size: 1.3rem;
            }
            .feature-item p {
                font-size: 0.9rem;
            }
        }


        /* Responsive Design */
        @media (max-width: 767px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1.2rem;
            }
            .feature-item i {
                font-size: 40px;
            }
        }

        @media (max-width: 991px) {
            .feature-item i {
                font-size: 45px;
            }
        }

        /* Grid Improvements for Features */
        .features .row {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 20px;
        }

    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero">
        <div class="parallax"></div>
        <h1>Selamat Datang di Blossom POS</h1>
        <p>Solusi Modern untuk Bisnis Anda</p>
        <div>
            <a href="{{ route('login') }}" class="btn btn-custom">Masuk</a>
            <a href="{{ route('register') }}" class="btn btn-custom">Daftar</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container features">
        <h2 class="text-center mb-5">Fitur Utama</h2>
        <div class="row">
            <div class="feature-item">
                <i class="fas fa-tachometer-alt"></i>
                <h3>Dashboard</h3>
                <p>Insight utama dan metrik penting untuk mengelola bisnis Anda.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-cogs"></i>
                <h3>Manajemen Produk</h3>
                <p>Kelola produk, kategori, merek, dan pemasok dengan mudah.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-chart-line"></i>
                <h3>Pelacakan Penjualan & Pembelian</h3>
                <p>Pantau transaksi penjualan dan pembelian secara real-time.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-users"></i>
                <h3>Manajemen Pelanggan & Pengguna</h3>
                <p>Kelola pelanggan dan pengguna dengan peran dan izin yang dapat disesuaikan.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-cogs"></i>
                <h3>Pengaturan & Preferensi</h3>
                <p>Sesuaikan pengaturan dan preferensi sistem sesuai dengan kebutuhan bisnis.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-box"></i>
                <h3>Penyesuaian Stok & Inventaris</h3>
                <p>Kelola inventaris dan lakukan penyesuaian stok dengan mudah.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-exchange-alt"></i>
                <h3>Dukungan Multi-Mata Uang</h3>
                <p>Gunakan beberapa mata uang untuk transaksi internasional.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-warehouse"></i>
                <h3>Multi-Lokasi Gudang</h3>
                <p>Kelola stok di berbagai lokasi gudang.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-cloud-upload-alt"></i>
                <h3>Opsi Cadangan Lokal & Cloud</h3>
                <p>Cadangkan data Anda di cloud atau secara lokal.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-file-import"></i>
                <h3>Impor & Ekspor Data</h3>
                <p>Impor dan ekspor data produk dan transaksi dengan mudah.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-language"></i>
                <h3>Dukungan Multi-Bahasa</h3>
                <p>Gunakan aplikasi dalam berbagai bahasa untuk kenyamanan pengguna.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-cash-register"></i>
                <h3>Integrasi POS</h3>
                <p>Integrasikan sistem POS dengan berbagai perangkat dan metode pembayaran.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-bell"></i>
                <h3>Notifikasi & Peringatan</h3>
                <p>Dapatkan notifikasi penting tentang stok dan transaksi.</p>
            </div>
            <div class="feature-item">
                <i class="fab fa-telegram-plane"></i>
                <h3>Promosi Produk via Telegram</h3>
                <p>Kirim promosi produk langsung ke Telegram pelanggan Anda.</p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Blosom POS. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
