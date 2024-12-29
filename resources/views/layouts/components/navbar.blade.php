<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <!-- Membuat navbar dengan Bootstrap. "navbar-expand-lg" menjadikan navbar responsif, memecah menjadi menu toggle saat layar kecil. -->

    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img
                src="https://b856188.smushcdn.com/856188/wp-content/uploads/2022/02/logo3-e1511767184374.png?lossy=2&strip=0&webp=1"
                alt="Logo" style="width: 100px; height: auto;" alt=""></a>
        <!-- "style" mengatur ukuran logo agar lebar 100px dengan tinggi proporsional. -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Daftar menu navigasi di dalam navbar. -->

                <li class="nav-item">
                    <a class="nav-link navtext {{ Route::currentRouteName() === 'beranda' ? 'active' : '' }}"
                        aria-current="page" href="{{ route('beranda') }}">Pilihan Beasiswa</a>
                    <!-- "Route::currentRouteName()" memeriksa apakah rute saat ini adalah 'beranda'. Jika ya, kelas 'active' ditambahkan. -->

                </li>
                <li class="nav-item">
                    <a class="nav-link navtext {{ Route::currentRouteName() === 'daftar' ? 'active' : '' }}"
                        href="{{ route('daftar') }}">Daftar</a>
                    <!-- Menu navigasi "Daftar". Sama seperti di atas, menambahkan kelas 'active' jika rute saat ini adalah 'daftar'. -->
                </li>

                <li class="nav-item">
                    <a class="nav-link navtext {{ Route::currentRouteName() === 'hasil' ? 'active' : '' }}"
                        href="{{ route('hasil') }}">Hasil</a>
                    <!-- Menu navigasi "Hasil". Mengecek apakah rute saat ini adalah 'hasil' untuk menambahkan kelas 'active'. -->

                </li>
                <li class="nav-item">
                    <a class="nav-link navtext {{ Route::currentRouteName() === 'grafik' ? 'active' : '' }}"
                        href="{{ route('grafik') }}">Grafik</a>
                    <!-- Menu navigasi "Grafik". Kelas 'active' ditambahkan jika rute saat ini adalah 'grafik'. -->
                </li>
            </ul>
        </div>
    </div>
</nav>
