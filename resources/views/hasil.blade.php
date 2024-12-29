@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- Judul section --}}
        <h1 class="text-center my-4">Hasil Pendaftaran Beasiswa</h1>

        <!-- Flash Messages -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <!-- Table Section -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                {{-- Table Header --}}
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Semester</th>
                        <th>IPK</th>
                        <th>Jenis Beasiswa</th>
                        <th>Berkas</th>
                        <th>Status Ajuan</th>
                    </tr>
                </thead>

                {{-- Table Body --}}
                <tbody>
                    @forelse ($beasiswa as $index => $data)
                        <tr>
                            {{-- Nomor --}}
                            <td>{{ $index + 1 }}</td>

                            {{-- Data peserta --}}
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_hp }}</td>
                            <td>{{ $data->semester }}</td>
                            <td>{{ $data->ipk }}</td>
                            <td>{{ $data->jenis_beasiswa }}</td>

                            {{-- Berkas --}}
                            <td>
                                <a href="{{ asset('storage/' . $data->berkas) }}" target="_blank"
                                    class="btn btn-sm btn-primary">
                                    Lihat Berkas
                                </a>
                            </td>

                            {{-- Status Ajuan --}}
                            <td>
                                <span
                                    class="badge 
                                {{ $data->status_ajuan == 'belum di verifikasi' ? 'bg-warning' : 'bg-success' }}">
                                    {{ ucfirst($data->status_ajuan) }}
                                </span>
                            </td>~
                        </tr>
                    @empty

                        {{-- empty state --}}
                        <tr>
                            <td colspan="9" class="text-center">Belum ada data pendaftaran.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
