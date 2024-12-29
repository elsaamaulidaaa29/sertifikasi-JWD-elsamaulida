@extends('layouts.app')

@section('content')
    <h3 class="subheadline">Daftar Beasiswa</style>
    </h3>
    <div class="container">
        <!-- Session Flash for Error and Success Messages -->
        @if (session('success'))
            {{-- Menampilkan pesan sukses --}}
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            {{-- Memampilkan pesan eror --}}
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        {{-- Form Pendaftaran --}}
        <div class="daftar">
            <form action="/daftar" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Input Nama --}}
                <div class="input-group input-group-sm mb-3 w-100">
                    <span class="input-group-text w-25" id="inputGroup-sizing-sm">Masukkan Nama</span>
                    <input class="form-control" type="text" name="nama" aria-label="default input example">
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Input Email --}}
                <div class="input-group input-group-sm mb-3 w-100">
                    <span class="input-group-text w-25" id="inputGroup-sizing-sm">Masukkan Email</span>
                    <input class="form-control" type="text" name="email" aria-label="default input example">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Input nomor HP --}}
                <div class="input-group input-group-sm mb-3 w-100">
                    <span class="input-group-text w-25" id="inputGroup-sizing-sm">Nomor HP</span>
                    <input class="form-control" type="text" name="no_hp" aria-label="default input example">
                    @error('no_hp')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Dropdown semester --}}
                <div class="input-group input-group-sm mb-3 w-100">
                    <span class="input-group-text w-25" id="inputGroup-sizing-sm">Semester Saat Ini</span>
                    <select class="form-control" id="semester" name="semester" aria-describedby="inputGroup-sizing-sm">
                        <option value="" disabled selected>Pilih Semester</option>
                        @for ($i = 1; $i <= 8; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @error('semester')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Input IPK terakhir --}}
                <div class="input-group input-group-sm mb-3 w-100">
                    <span class="input-group-text w-25" id="inputGroup-sizing-sm">IPK terakhir</span>
                    <input type="text" id="ipk" class="form-control" name="ipk"
                        aria-label="Sizing example input" readonly>
                    @error('ipk')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Dropdown pilihan Beasiswaa --}}
                <div class="input-group input-group-sm mb-3 w-100">
                    <span class="input-group-text w-25" id="inputGroup-sizing-sm">Beasiswa Pilihan</span>
                    <select class="form-control" id="jenis_beasiswa" name="jenis_beasiswa"
                        aria-describedby="inputGroup-sizing-sm" disabled>
                        <option value="" disabled selected>Pilih Beasiswa</option>
                        <option value="Kominfo">Beasiswa Kominfo</option>
                        <option value="IDCLOUDHOST">Beasiswa IDCLOUDHOST</option>
                        <option value="TelkomUniversity">Beasiswa Telkom University</option>
                    </select>
                    @error('jenis_beasiswa')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Input berkas persyaratan --}}
                <div class="input-group input-group-sm mb-3 w-100">
                    <span class="input-group-text w-25" id="inputGroup-sizing-sm">Upload Berkas Syarat</span>
                    <input type="file" id="berkas" class="form-control" name="berkas"
                        aria-label="Sizing example input" disabled>
                    @error('berkas')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tombol aksi --}}
                <div class="form-btn">
                    <button type="submit" class="btn btn-primary" id="submitButton" style="margin-right: 30px;"
                        disabled>Daftar</button>
                    <button type="button" class="btn btn-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script JavaScript untuk mengatur validasi dan input otomatis IPK berdasarkan pilihan semester -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ipkField = document.getElementById('ipk');
            const semesterSelect = document.getElementById('semester');
            const beasiswaSelect = document.getElementById('jenis_beasiswa');
            const berkasInput = document.getElementById('berkas');
            const submitButton = document.getElementById('submitButton');

            // Simulasi nilai IPK berdasarkan semester
            const ipkValues = {
                1: 2.8,
                2: 3.0,
                3: 2.9,
                4: 3.1,
                5: 3.2,
                6: 3.3,
                7: 3.4,
                8: 3.5
            };

            // Event listener untuk mengubah IPK saat semester dipilih
            semesterSelect.addEventListener('change', function() {
                const selectedSemester = parseInt(semesterSelect.value);
                const ipk = ipkValues[selectedSemester] || 0;
                ipkField.value = ipk.toFixed(1); // Format angka desimal 1 angka di belakang koma

                // Validasi apakah IPK memenuhi syarat minimal (>= 3.0)
                if (ipk >= 3) {
                    beasiswaSelect.disabled = false;
                    berkasInput.disabled = false;
                    submitButton.disabled = false;
                } else {
                    beasiswaSelect.disabled = true;
                    berkasInput.disabled = true;
                    submitButton.disabled = true;
                }
            });
        });
    </script>
@endsection
