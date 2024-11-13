<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KehilanganKtp extends Model
{
    use HasFactory;

    protected $table = 'kehilangan_ktp';

    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'tanggal_kehilangan',
        'tempat_kehilangan',
        'keterangan',
        'status_pengajuan',
    ];
}
