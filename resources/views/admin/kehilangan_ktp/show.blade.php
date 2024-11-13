@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Detail Pengajuan KTP</h1>
        <a href="{{ route('pengajuan_ktp.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $data->nama }}</td>
                </tr>
                <tr>
                    <th>Nik</th>
                    <td>{{ $data->nik }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $data->alamat }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $data->tempat_kehilangan }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $data->tanggal_kehilangan }}</td>
                </tr>
    
                <tr>
                    <th>Status Pengajuan</th>
                    <td>
                        @php
                            $statusClass = match($data->status_pengajuan) {
                                'Selesai' => 'success',
                                'Ditolak' => 'danger',
                                'Proses' => 'secondary',
                                default => 'secondary',
                            };
                        @endphp
                        <span class="badge bg-{{ $statusClass }}">{{ $data->status_pengajuan }}</span>
                    </td>
                </tr>
                <tr>
                    <th>Dibuat Pada</th>
                    <td>{{ $data->created_at->format('d-m-Y H:i') }}</td>
                </tr>
                <tr>
                    <th>Diperbarui Pada</th>
                    <td>{{ $data->updated_at->format('d-m-Y H:i') }}</td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>{{$data->keterangan}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
