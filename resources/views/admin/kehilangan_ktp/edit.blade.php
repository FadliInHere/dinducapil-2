@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Edit Pengajuan KTP</h1>
        <a href="{{ route('kehilangan_ktp.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('kehilangan_ktp.update', $data->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', $data->nama) }}" required>
                </div>

                <div class="mb-3">
                    <label for="nik" class="form-label">Nik</label>
                    <input type="text" id="nik" name="nik" class="form-control" value="{{ old('nik', $data->nik) }}" required>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea id="alamat" name="alamat" class="form-control" required>{{ old('alamat', $data->alamat) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal_kehilangan" class="form-label">Tanggal Kehilangan</label>
                    <input type="date" id="tanggal_kehilangan" name="tanggal_kehilangan" class="form-control" value="{{ old('tanggal_kehilangan', $data->tanggal_kehilangan) }}" required>
                </div>

                <div class="mb-3">
                    <label for="tempat_kehilangan" class="form-label">Tempat Kehilangan</label>
                    <input type="text" id="tempat_kehilangan" name="tempat_kehilangan" class="form-control" value="{{ old('tempat_kehilangan', $data->tempat_kehilangan) }}" required>
                </div>

                <div class="mb-3">
                    <label for="status_pengajuan" class="form-label">Status Pengajuan</label>
                    <select id="status_pengajuan" name="status_pengajuan" class="form-select">
                        <option value="Proses" {{ old('status_pengajuan', $data->status_pengajuan) == 'Proses' ? 'selected' : '' }}>Proses</option>
                        <option value="Selesai" {{ old('status_pengajuan', $data->status_pengajuan) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="Ditolak" {{ old('status_pengajuan', $data->status_pengajuan) == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" class="form-control" required>{{ old('keterangan', $data->keterangan) }}</textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
