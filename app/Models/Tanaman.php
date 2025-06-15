<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Tanaman extends Model
{
    //
    use HasFactory;

    protected $table = 'tb_tanaman';
    protected $primaryKey = 'id_tanaman';

    protected $fillable = [
        'kode_tanaman',
        'nama_tanaman',
        'jenis_tanaman',
        'lokasi',
        'tanggal_tanam',
        'kebutuhan_air',
        'status',
        'intensitas_cahaya',
        'durasi_cahaya_jam',
        'tds',
        'id_user',
        'id_jenis',
        'laporan_terakhir',
    ];

    // Optional: relasi ke user dan jenis
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // public function jenis()
    // {
    //     return $this->belongsTo(Jenis::class, 'id_jenis');
    // }
}
