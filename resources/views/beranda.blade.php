@extends('layouts.app')

@section('content')
    {{-- Headline --}}
    <h1 class="headline">Beasiswa Telkom University</h1>
    <h4 class="subheadline">"Berani Bermimpi, Kami Mendukung Langkahmu."</h4>
    <div class="card-beasiswa d-flex">

        {{-- Pilihan BEASISWA --}}
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrNDXl9i0Rc5x4fW-pvdTJ8QNu2FliDIjA7g&s"
                alt="" class="img-card">
            <a href="https://smb.telkomuniversity.ac.id/jalur-seleksi/beasiswa-idcloudhost/"
                style="text-align: center;"><b>Beasiswa IDCLOUDHOST 2024</b></a>
        </div>

        <div class="card">
            <img src="https://smb.telkomuniversity.ac.id/wp-content/uploads/2023/10/featured-image-jalur-seleksi-beasiswa-kominfo-telkom-university-2025.jpg"
                alt="" class="img-card">
            <a href="https://smb.telkomuniversity.ac.id/jalur-seleksi/beasiswa-kominfo/"
                style="text-align: center;"><b>Beasiswa KOMINFO</b></a>
        </div>

        <div class="card">
            <img src="https://smb.telkomuniversity.ac.id/wp-content/uploads/2023/02/featured-image-jalur-beasiswa-telkom-university-2024.jpg"
                alt="" class="img-card">
            <a href="https://smb.telkomuniversity.ac.id/jalur-seleksi/jalur-beasiswa-telkom-university/"
                style="text-align: center;"><b>BEASISWA TELKOM UNIVERSITY 2024</b></a>
        </div>
    </div>
@endsection
