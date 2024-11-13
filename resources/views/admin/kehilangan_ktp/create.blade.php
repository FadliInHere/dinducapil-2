<!-- resources/views/kehilangan_ktp/create.blade.php -->

@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pengajuan Kehilangan KTP</h2>

    <form action="{{ route('kehilangan_ktp.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">Nik</label>
            <input type="text" class="form-control" id="nik" name="nik" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal_kehilangan" class="form-label">Tanggal Kehilangan</label>
            <input type="date" class="form-control" id="tanggal_kehilangan" name="tanggal_kehilangan" required>
        </div>

        <div class="mb-3">
            <label for="tempat_kehilangan" class="form-label">Tempat Kehilangan</label>
            <input type="text" class="form-control" id="tempat_kehilangan" name="tempat_kehilangan" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
